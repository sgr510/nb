<?php /* Smarty version 2.6.26, created on 2014-01-09 10:45:07
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/kiyaku.tpl', 24, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/kiyaku.tpl', 24, false),array('modifier', 'nl2br', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/kiyaku.tpl', 44, false),)), $this); ?>

<section id="undercolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div class="information">
        <p>登録前に下記ご利用規約をよくお読みください。</p>
        <p>「同意して会員登録」をクリックすると、本規約の全てに同意したことになります。</p>
    </div><br>

    <div class="btn_area">
        <ul>
            <li><a href="<?php echo ((is_array($_tmp=@ENTRY_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn" rel="external">同意して会員登録へ</a></li>
        </ul>
    </div><br>&nbsp;<br>

    <div id="kiyaku_text" style="font-size:80%;"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>

    <div class="btn_area">
        <ul class="btn_btm">
            <li><a href="<?php echo ((is_array($_tmp=@ENTRY_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn" rel="external">同意して会員登録へ</a></li>
            <li><a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn_back" rel="external">同意しない</a></li>
        </ul>
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