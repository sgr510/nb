<?php /* Smarty version 2.6.26, created on 2014-01-09 10:40:44
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/simple/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/footer.tpl', 28, false),array('modifier', 'date_format', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/footer.tpl', 28, false),array('modifier', 'default', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/footer.tpl', 29, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/footer.tpl', 29, false),)), $this); ?>
<!--▼FOOTER-->
<div id="footer_wrap">
    <div id="footer" class="clearfix">
        <div id="pagetop"><a href="#top">このページの先頭へ</a></div>
<?php if (0): ?>
        <div id="copyright">Copyright ©
            <?php if (((is_array($_tmp=@RELEASE_YEAR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y"))): ?><?php echo ((is_array($_tmp=@RELEASE_YEAR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-<?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

            <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name_eng'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 All rights reserved.
        </div>
<?php endif; ?>
    </div>
</div>

<div id="footer_wrap">
    <div id="footer" class="clearfix">
        <div><a href="/order/">特定商取引法関する表記</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://s-cubism.jp/policy.html" target="_blank">プライバシーポリシー</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://sk.kaisyanavi.jp/page/tos/" target="_blank">利用規約</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/contact/" target="_blank">お問い合わせ</a></div>
    </div>
</div>
<!--▲FOOTER-->