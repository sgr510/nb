<?php /* Smarty version 2.6.26, created on 2014-01-09 13:28:14
         compiled from /var/www/html/naitei-bank/html/../data/downloads/module/mdl_paypal/paypal_cancel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/downloads/module/mdl_paypal/paypal_cancel.tpl', 4, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/downloads/module/mdl_paypal/paypal_cancel.tpl', 4, false),)), $this); ?>
<!--▼CONTENTS-->
<div id="undercolumn">
<div id="undercolumn_shopping">
  <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

  <div id="complete_area">
    <p class="message">お支払いをキャンセルしました。</p>
  </div>
  <div class="btn_area">
    <ul>
      <li>
        <a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_toppage_on.jpg','b_toppage');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_toppage.jpg','b_toppage');">
        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_toppage.jpg" alt="トップページへ" border="0" name="b_toppage" /></a>
      </li>
    </ul>
  </div>
  </form>
</div>
</div>
<!--▲CONTENTS-->