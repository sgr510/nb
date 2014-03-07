<?php /* Smarty version 2.6.26, created on 2014-01-09 22:11:28
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl', 26, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl', 26, false),array('modifier', 'sfTrimURL', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl', 35, false),array('modifier', 'function_exists', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl', 43, false),array('modifier', 'call_user_func', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/change.tpl', 44, false),)), $this); ?>

<section id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <h3 class="title_mypage"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>

    <!--★インフォメーション★-->
    <div class="intro">
        <p><span class="attention">※</span>は必須入力項目です。</p>
    </div>

    <form name="form1" id="form1" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/mypage/change.php">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="confirm" />
        <input type="hidden" name="customer_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />

        <dl class="form_entry">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@SMARTPHONE_TEMPLATE_REALDIR)."frontparts/form_personal_input.tpl", 'smarty_include_vars' => array('flgFields' => 3,'emailMobile' => true,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </dl>
        <?php if (((is_array($_tmp='sfGMOMypageDisplay')) ? $this->_run_mod_handler('function_exists', true, $_tmp) : function_exists($_tmp))): ?>
            <?php echo ((is_array($_tmp='sfGMOMypageDisplay')) ? $this->_run_mod_handler('call_user_func', true, $_tmp) : call_user_func($_tmp)); ?>

        <?php endif; ?>
        <div class="btn_area">
            <p><input type="submit" class="btn data-role-none" value="確認ページへ" name="refusal" id="refusal" /></p>
        </div>
    </form>
</section>

<!--▼検索バー -->
<section id="search_area">
    <form method="get" action="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="search" />
        <input type="search" name="name" id="search" value="" placeholder="キーワードを入力" class="searchbox" >
    </form>
</section>
<!--▲検索バー -->