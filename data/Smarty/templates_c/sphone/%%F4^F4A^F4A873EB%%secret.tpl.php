<?php /* Smarty version 2.6.26, created on 2014-01-11 10:45:26
         compiled from forgot/secret.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'forgot/secret.tpl', 29, false),array('modifier', 'h', 'forgot/secret.tpl', 33, false),array('modifier', 'sfGetErrorColor', 'forgot/secret.tpl', 45, false),array('modifier', 'escape', 'forgot/secret.tpl', 51, false),)), $this); ?>

<section id="windowcolumn">
    <h2 class="title">パスワードを忘れた方</h2>
    <div class="intro">
        <p>ご登録時に入力した下記質問の答えを入力して「次へ」ボタンをクリックしてください。</p>
    </div>
    <form action="?" method="post" name="form1">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="secret_check" />
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'reminder_answer'): ?>
                <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <div class="window_area clearfix">

            <p>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['arrReminder'][$this->_tpl_vars['arrForm']['reminder']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />

                <!--★答え入力★-->
                <input type="text" name="reminder_answer"
                    value="" class="boxLong text data-role-none"
                    style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" /><br />
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['errmsg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            </p>

            <hr />

            <p>※質問の答えをお忘れになられた場合は、<a href="mailto:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hex') : smarty_modifier_escape($_tmp, 'hex')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hexentitiy') : smarty_modifier_escape($_tmp, 'hexentitiy')); ?>
</a>までご連絡ください。</p>

        </div>

        <p class="btn_area"><input type="submit" class="btn data-role-none" value="次へ" name="next" id="next" /></p>
    </form>
</section>