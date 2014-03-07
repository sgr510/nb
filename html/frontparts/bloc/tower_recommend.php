<?php

// {{{ requires
require_once CLASS_EX_REALDIR . 'page_extends/frontparts/bloc/LC_Page_FrontParts_Bloc_Ex.php';

/**
 * TowerRecommendのページクラス.
 *
 * @package Page
 * @author Cyber-Will Inc.
 * @version $Id:LC_Page_FrontParts_Bloc_Cart.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class LC_Page_FrontParts_Bloc_TowerRecommend extends LC_Page_FrontParts_Bloc_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {
        $plugin = SC_Plugin_Util_Ex::getPluginByPluginCode("TowerRecommend");
        $this->arrProducts = $this->lfGetProducts();
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
     * 未購入商品取得
     *
     * @return void
     */
    function lfGetProducts() {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objProduct = new SC_Product_Ex();

        // おすすめ商品取得
        $col = 'T1.product_id';
        $table = 'dtb_products_class AS T1 LEFT JOIN dtb_products AS T2 USING(product_id)';
        $where = 'T2.del_flg = 0 AND T2.status = 1 ';
        $where .= 'AND NOT EXISTS (SELECT * FROM dtb_order_detail AS T3 LEFT JOIN dtb_order AS T4 USING(order_id) WHERE T3.product_class_id = T1.product_class_id AND T4.status <> ? AND T4.status <> ?)';
        $arrVal[] = ORDER_CANCEL;
        $arrVal[] = ORDER_PENDING;
        $objQuery->setOrder('RANDOM()');
        $objQuery->setLimit(10);
        $objQuery->setGroupBy('T1.product_id');
        $arrSFProducts = $objQuery->select($col, $table, $where, $arrVal);

        $objQuery =& SC_Query_Ex::getSingletonInstance();
        if (count($arrSFProducts) > 0) {
            // 商品一覧を取得
            // where条件生成&セット
            $arrProductId = array();
            $where = 'product_id IN (';
            foreach ($arrSFProducts AS $key => $val) {
                $arrProductCode[] = $val['product_id'];
            }
            // 取得
            $arrProductList = $objProduct->getListByProductIds($objQuery, $arrProductCode);
            // おすすめ商品情報にマージ
            foreach ($arrSFProducts AS $key => $value) {
                $arrRow =& $arrSFProducts[$key];
                if (isset($arrProductList[$arrRow['product_id']])) {
                    $arrRow = array_merge($arrRow, $arrProductList[$arrRow['product_id']]);
                } else {
                    // 削除済み商品は除外
                    unset($arrSFProducts[$key]);
                }
            }
        }
        return $arrSFProducts;
    }

}

$objPage = new LC_Page_FrontParts_Bloc_TowerRecommend();
$objPage->blocItems = $params['items'];
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
