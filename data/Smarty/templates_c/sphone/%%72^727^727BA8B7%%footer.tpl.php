<?php /* Smarty version 2.6.26, created on 2014-01-09 10:40:59
         compiled from ./footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', './footer.tpl', 28, false),array('modifier', 'h', './footer.tpl', 28, false),)), $this); ?>

<!--▼ FOOTER-->
<footer class="global_footer">

    <nav class="guide_area">
        <p>
            <a rel="external" href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
abouts/<?php echo ((is_array($_tmp=((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">当サイトについて</a>
            <a rel="external" href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
contact/<?php echo ((is_array($_tmp=((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">お問い合わせ</a><br />
            <a rel="external" href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
order/<?php echo ((is_array($_tmp=((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">特定商取引に関する表記</a>
            <a rel="external" href="https://s-cubism.jp/policy.html">プライバシーポリシー</a>
        </p>
    </nav>


</footer>
<!--▲ FOOTER-->