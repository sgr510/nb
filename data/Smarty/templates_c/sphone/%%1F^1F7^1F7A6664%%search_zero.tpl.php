<?php /* Smarty version 2.6.26, created on 2014-01-09 12:15:28
         compiled from frontparts/search_zero.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'frontparts/search_zero.tpl', 27, false),)), $this); ?>

<div>
    <!--★エラーメッセージ-->
    <p class="error">
        <?php if (((is_array($_tmp=$_GET['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search'): ?>
            該当件数<strong>0件</strong>です。<br />
            他の検索キーワードより再度検索をしてください。
        <?php else: ?>
            現在、商品はございません。
        <?php endif; ?>
    </p>
</div>