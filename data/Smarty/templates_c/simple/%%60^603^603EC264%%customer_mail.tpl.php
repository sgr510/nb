<?php /* Smarty version 2.6.26, created on 2014-01-21 10:10:13
         compiled from mail_templates/customer_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/customer_mail.tpl', 6, false),)), $this); ?>
┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、「内定バンク」に会員登録をされた方にお送りしています。
　お心当りが無い場合、その旨をこのメールにご返信頂ければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo ((is_array($_tmp=$this->_tpl_vars['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 様

こんにちは、「内定バンク」でございます。

銀行振込またはコンビニ払いにて入金を確認しましたので、
本会員登録手続きのご案内をさせて頂きます。
（※現在は【仮登録】の状態です。）

本会員登録を完了するには下記URLにアクセスしてください。
※入力されたお客様の情報はSSL暗号化通信により保護されます。

<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
regist/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
?mode=regist&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['uniqid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['etc_value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>


上記URLにて本会員登録が完了しましたら、改めて登録の
ご確認メールをお送りさせて頂きます。

どうぞ宜しくお願い致します。

-=-=-=-=-=-=-=-
内定バンク
http://naitei-bank.jp/

運営会社
(株)エスキュービズム
http://s-cubism.jp/
-=-=-=-=-=-=-=-