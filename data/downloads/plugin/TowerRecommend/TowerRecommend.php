<?php
/*
 *
 * TowerRecommend
 * Copyright(c) 2012 Cyber-Will Inc. All Rights Reserved.
 *
 * http://www.cyber-will.co.jp/
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

/**
 * プラグインのメインクラス
 *
 * @package TowerRecommend
 * @author Cyber-Will Inc. YAMASAKI Yutaka
 * @version $Id: $
 */
class TowerRecommend extends SC_Plugin_Base {
    
    /**
     * コンストラクタ
     */
    public function __construct(array $arrSelfInfo) {
        parent::__construct($arrSelfInfo);
    }
    
    /**
     * インストール
     * installはプラグインのインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin plugin_infoを元にDBに登録されたプラグイン情報(dtb_plugin)
     * @return void
     */
    function install($arrPlugin) {
        if(copy(PLUGIN_UPLOAD_REALDIR . get_class($this) . "/logo.png", PLUGIN_HTML_REALDIR . get_class($this) . "/logo.png") === false);
        if(copy(PLUGIN_UPLOAD_REALDIR . get_class($this) . "/tit_bloc_tower_recommend.jpg", PLUGIN_HTML_REALDIR . get_class($this) . "/tit_bloc_tower_recommend.jpg") === false);
    }

    /**
     * アンインストール
     * uninstallはアンインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     * 
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function uninstall($arrPlugin) {
        TowerRecommend::disable($arrPlugin);
        // ロゴ削除
        if(unlink(PLUGIN_HTML_REALDIR . get_class($this) . "/logo.png") === false);
        if(unlink(PLUGIN_HTML_REALDIR . get_class($this) . "/tit_bloc_tower_recommend.jpg") === false);
        if(SC_Helper_FileManager_Ex::deleteFile(PLUGIN_HTML_REALDIR .  get_class($this)) === false);
    }
    
    /**
     * 稼働
     * enableはプラグインを有効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function enable($arrPlugin) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        $bloc_id = 1 + $objQuery->max('bloc_id', 'dtb_bloc', 'device_type_id = 10');
        $sql  = "INSERT INTO dtb_bloc (device_type_id, bloc_id, bloc_name, tpl_path, filename, create_date, update_date, php_path, deletable_flg) ";
        $sql .= " VALUES (10, ?, 'TowerRecommendブロック', 'tower_recommend.tpl', 'tower_recommend', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '" . BLOC_DIR . "tower_recommend.php', 0);";
        $objQuery->query($sql, array($bloc_id));

        if(copy(PLUGIN_UPLOAD_REALDIR . get_class($this) . "/templates/frontparts/bloc/tower_recommend.tpl", TEMPLATE_REALDIR . "frontparts/bloc/tower_recommend.tpl") === false);
        if(copy(PLUGIN_UPLOAD_REALDIR . get_class($this) . "/tower_recommend.php", HTML_REALDIR . BLOC_DIR . "tower_recommend.php") === false);

        // シーケンスセット
        if (DB_TYPE == 'pgsql') {
            $sql = "SELECT setval('dtb_bloc_bloc_id_seq',(SELECT max(bloc_id) FROM dtb_bloc))";
            $objQuery->query($sql);
        }
    }

    /**
     * 停止
     * disableはプラグインを無効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function disable($arrPlugin) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        $bloc_id = $objQuery->get('bloc_id', 'dtb_bloc', 'filename = ?', array('tower_recommend'));
        $objQuery->delete('dtb_blocposition', 'bloc_id = ?', array($bloc_id));
        $objQuery->delete('dtb_bloc', 'bloc_id = ?', array($bloc_id));

        if(unlink(TEMPLATE_REALDIR . "frontparts/bloc/tower_recommend.tpl") === false);
        if(unlink(HTML_REALDIR . "frontparts/bloc/tower_recommend.php") === false);
    }
    
    /**
     * プレフィルタコールバック関数
     *
     * @param string &$source テンプレートのHTMLソース
     * @param LC_Page_Ex $objPage ページオブジェクト
     * @param string $filename テンプレートのファイル名
     * @return void
     */
    function prefilterTransform(&$source, LC_Page_Ex $objPage, $filename) {
        $objTransform = new SC_Helper_Transform($source);
        $template_dir = PLUGIN_UPLOAD_REALDIR . get_class($this) . '/templates/';
        switch($objPage->arrPageLayout['device_type_id']){
            case DEVICE_TYPE_MOBILE:
                break;
            
            // スマートフォン
            case DEVICE_TYPE_SMARTPHONE:
                break;
                
            // PC
            case DEVICE_TYPE_PC:
                break;
                
            // 管理画面
            case DEVICE_TYPE_ADMIN:
            default:
                break;
        }
        $source = $objTransform->getHTML();
    }
    
    /**
     * 処理の介入箇所とコールバック関数を設定
     * registerはプラグインインスタンス生成時に実行されます
     * 
     * @param SC_Helper_Plugin $objHelperPlugin 
     */
    function register(SC_Helper_Plugin $objHelperPlugin) {
        parent::register($objHelperPlugin, $priority);
    }
    
}

