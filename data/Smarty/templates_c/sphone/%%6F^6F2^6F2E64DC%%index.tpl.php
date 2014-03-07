<?php /* Smarty version 2.6.26, created on 2014-01-18 21:32:53
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/entry/index.tpl', 47, false),)), $this); ?>

<section id="undercolumn">
<h2 class="title">コンビニ決済</h2>
<div>
【コンビニ決済】を希望の方は、このページではなく<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">リンク先のサイト</a>で手続きして下さい。<br>
この先、内定バンクでの登録は不要です、下のリンク先で買い物をしメールの指示に従って下さい。<br>
&gt;&gt; <a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">コンビニ決済 (stores.jp)</a><br>
&nbsp;<br>
お急ぎの方は「クレジットカードまたはPaypal」での決済が一番早く利用できます。<br>
&nbsp;<br>
</div>

    <h2 class="title">カード、Paypal、銀行振込</h2>
    <div class="intro">
        <p style="font-size:90%;"><span class="attention">iPhone</span>をお使いの方は標準ブラウザでご登録ください。</p>
        <p style="font-size:90%;"><span class="attention">※</span>は必須入力項目</p>
    </div>

    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="confirm" />

        <dl class="form_entry">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@SMARTPHONE_TEMPLATE_REALDIR)."frontparts/form_personal_input.tpl", 'smarty_include_vars' => array('flgFields' => 4,'emailMobile' => false,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </dl>

        <div class="btn_area">
            <p><input type="submit" value="確認ページへ" class="btn data-role-none" alt="確認ページへ" name="confirm" id="confirm" /></p>
        </div>

        <div style="margin:10px;">
          <p><span class="attention">カードまたはPaypalは即時</span>、利用できるようになります。</p>
          <p>銀行振込を選択した場合は仮会員として登録され、振込を確認後に本会員となります。</p>
          <p><span class="attention">コンビニ決済</span>を希望の方は、<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">こちらのサイト</a>で手続きをお願いします。<p>
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