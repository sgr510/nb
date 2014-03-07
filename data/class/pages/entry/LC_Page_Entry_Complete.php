<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2013 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// {{{ requires
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * 会員登録(完了) のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Entry_Complete.php 22796 2013-05-02 09:11:36Z h_yoshimoto $
 */
class LC_Page_Entry_Complete extends LC_Page_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->httpCacheControl('nocache');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {

        // カートが空かどうかを確認する。
        $objCartSess            = new SC_CartSession_Ex();
        $arrCartKeys = $objCartSess->getKeys();
        $this->tpl_cart_empty = true;
        foreach ($arrCartKeys as $cart_key) {
            if (count($objCartSess->getCartList($cart_key)) > 0) {
                $this->tpl_cart_empty = false;
                break;
            }
        }
        // ========= Added by KACR 2013.12.19 ==========

        // メインテンプレートを設定
        /*
        if (CUSTOMER_CONFIRM_MAIL == true) {
            // 仮会員登録完了
            $this->tpl_mainpage     = 'entry/complete.tpl';
        } else {
            // 本会員登録完了
            SC_Response_Ex::sendRedirectFromUrlPath('regist/complete.php');
        }
        */

        if (isset($_POST['invoice']) || $_SESSION['order_id']){
        	
        	// 本会員登録完了
        	if (isset($_POST['invoice'])){
        		$order_id = $_POST['invoice'];
        	}else{
        		$order_id = $_SESSION['order_id'];
        		unset($_SESSION['order_id']);
        	}
        	
        	$objCartSession = new SC_CartSession_Ex();
        	$objCartSession->delAllProducts(1);
        	
        	$this->updateData($order_id);
        	$this->lfSendRegistMail($order_id);
        	
        	if (isset($_SESSION['customer_uniqid'])){
        		unset($_SESSION['customer_uniqid']);
        	}
        	
	        if (isset($_SESSION['entry_sess'])){
	        	unset($_SESSION['entry_sess']);
	        }
        
            SC_Response_Ex::sendRedirectFromUrlPath('regist/complete.php');
            
        }else{
        	// 仮会員登録完了
            $this->tpl_mainpage     = 'entry/complete.tpl';
        }

    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }
    
	/**
     * 決済モジュールから遷移する場合があるため, トークンチェックしない.
     * 
     * @author KACR 2013.12.13
     */
    function doValidToken() {
        // nothing.
    }
	
    /**
     * 正会員登録完了メール送信
     *
     * @author KACR 2013.12.13
     * @param int $order_id
     * @access private
     * @return void
     */
    function lfSendRegistMail($order_id) {
        $objQuery       = SC_Query_Ex::getSingletonInstance();
        $objCustomer    = new SC_Customer_Ex();
        $objHelperMail  = new SC_Helper_Mail_Ex();
        $objHelperMail->setPage($this);
        $CONF           = SC_Helper_DB_Ex::sfGetBasisData();

        //-- 会員データを取得
        $arrCustomer    = $objQuery->select('A.*', 'dtb_customer A LEFT JOIN dtb_order B ON A.customer_id = B.customer_id', 'B.order_id = ? AND B.del_flg = 0', array($order_id));
        $data           = $arrCustomer[0];
        //$objCustomer->setLogin($data['email']);

        //--　メール送信
        $objMailText    = new SC_SiteView_Ex();
        $objMailText->setPage($this);
        $objMailText->assign('CONF', $CONF);
        $objMailText->assign('name01', $data['name01']);
        $objMailText->assign('name02', $data['name02']);
        $toCustomerMail = $objMailText->fetch('mail_templates/customer_regist_mail.tpl');
        $subject = $objHelperMail->sfMakesubject('本会員登録が完了しました', $objMailText);
        $objMail = new SC_SendMail_Ex();

        $objMail->setItem(
                              ''                                // 宛先
                            , $subject                  // サブジェクト
                            , $toCustomerMail           // 本文
                            , $CONF['email03']          // 配送元アドレス
                            , $CONF['shop_name']        // 配送元 名前
                            , $CONF['email03']          // reply_to
                            , $CONF['email04']          // return_path
                            , $CONF['email04']          // Errors_to
                            , $CONF['email01']      	// Bcc
        );
        // 宛先の設定
        $name = $data['name01'] . $data['name02'] .' 様';
        $objMail->setTo($data['email'], $name);
        $objMail->sendMail();
    }
    
    /**
     * 会員情報と受注情報の削除フラグの更新
     *
     * @author KACR 2013.12.13
     * @return void
     */
    function updateData($order_id)
    {
    	$objQuery    = SC_Query_Ex::getSingletonInstance();
		//$objQuery->update('dtb_customer A, dtb_order B', array('A.del_flg'=>0), 'B.order_id = ? AND A.customer_id = B.customer_id AND B.del_flg = 0', array($order_id));
		$objQuery->update('dtb_order', array('del_flg'=>0), 'order_id = ?', array($order_id));
		
        $arrCustomer    = $objQuery->select('customer_id', 'dtb_order', 'order_id = ?', array($order_id));
        $data           = $arrCustomer[0];
        $objQuery->update('dtb_customer', array('del_flg'=>0), 'customer_id = ?', array($data['customer_id']));
		
    }
}
