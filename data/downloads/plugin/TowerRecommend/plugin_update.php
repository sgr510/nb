<?php
/**
 * プラグイン のアップデート用クラス.
 *
 * @package SocialButton
 * @author ria
 */
class plugin_update{
   /**
     * アップデート
     * updateはアップデート時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     * 
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function update($arrPlugin) {
        // バージョン0.0.1からのアップデート
        switch ($arrPlugin['plugin_version']) {
           case "0.0.1":
           //plugin_update::update_001($arrPlugin);
           break;

           default:
           break;
        }

        // dtb_pluhinを更新します.
        //plugin_update::updateDtbPluginVersion($arrPlugin['plugin_id'], "0.0.2");
    }
    
    /**
     * 0.0.1のアップデートを実行します.
     * @param type $param 
     */
    function update_001($arrPlugin) {
        // 変更のあったファイルを上書きします.
    }
    
    /**
     * 0.0.2のアップデートを実行します.
     * @param type $param 
     */
    function update002($arrPlugin) {
        // 変更のあったファイルを上書きします.
    }
    
    /**
     * dtb_pluginを更新します.
     * 
     * @param int $plugin_id プラグインID
     * @return void
     */
    function updateDtbPluginVersion ($plugin_id, $plugin_version) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $sqlval = array();
        $table = "dtb_plugin";
        $sqlval['plugin_version'] = $plugin_version;
        $sqlval['compliant_version'] = "2.12.0, 2.12.1, 2.12.2";
        $sqlval['update_date'] = 'CURRENT_TIMESTAMP';
        $where = "plugin_id = ?";
        $objQuery->update($table, $sqlval, $where, array($plugin_id));        
    }
}
