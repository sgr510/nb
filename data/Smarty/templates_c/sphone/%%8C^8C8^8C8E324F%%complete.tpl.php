<?php /* Smarty version 2.6.26, created on 2014-01-09 11:04:06
         compiled from entry/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'entry/complete.tpl', 24, false),array('modifier', 'h', 'entry/complete.tpl', 24, false),)), $this); ?>

<section id="undercolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div id="completetext">
        <p>会員登録の受付が完了いたしました。<br />
        現在<font color="#FF0000">「仮会員」</font>の状態です。<br />
        ご入力いただいたメールアドレス宛てに、銀行振込の情報をお送りしております。<br />
        ログインするには、案内に従い本登録を完了して頂く必要があります。<br />
        よろしくお願い申し上げます。
        </p>
    </div>
    <hr>
    <div id="completetext">
        <p>今後ともご愛顧賜りますよう、よろしくお願い申し上げます。</p>
        <a rel="external" class="btn_s btn_sub" href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">トップページへ</a>
    </div>
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