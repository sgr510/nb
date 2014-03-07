<?php /* Smarty version 2.6.26, created on 2014-01-11 10:45:47
         compiled from forgot/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'forgot/complete.tpl', 29, false),array('modifier', 'sfTrimURL', 'forgot/complete.tpl', 42, false),)), $this); ?>

<section id="windowcolumn">
    <h2 class="title">パスワードを忘れた方</h2>
    <div class="intro">
        <p>パスワードの発行が完了いたしました。ログインには下記のパスワードをご利用ください。</p>
    </div>
    <form action="?" method="post" name="form1">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />

        <div class="window_area clearfix">
            <?php if (((is_array($_tmp=@FORGOT_MAIL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?>
                <input id="completebox" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['new_password'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" readonly="readonly" />
            <?php else: ?>
                <p  class="attention">ご登録メールアドレスに送付致しました。</p>
            <?php endif; ?>
            <hr />
            <p>※パスワードは、MYページの「会員登録内容変更」よりご変更いただけます。</p>
        </div>

        <div class="btn_area">
            <p><a rel="external" href="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/mypage/login.php" class="btn_sub btn_close">ログイン画面へ</a></p>
        </div>
    </form>
</section>