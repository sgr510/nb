<?php /* Smarty version 2.6.26, created on 2014-01-09 11:22:52
         compiled from mail_templates/customer_regist_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/customer_regist_mail.tpl', 6, false),)), $this); ?>
┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、「内定バンク」に会員登録をされた方にお送りしています。
　お心当りが無い場合、その旨をこのメールにご返信頂ければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo ((is_array($_tmp=$this->_tpl_vars['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 様

この度は「内定バンク」にご登録頂き、有り難うございます。
本会員登録が完了しましたので、ご連絡いたします。

--------------------------------
●お支払い金額について
[金額] <?php echo ((is_array($_tmp=@CUSTOMER_COST_LABEL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 (円)
--------------------------------

サイトにログイン頂き、先輩のESや内定体験談の完全版
コンテンツをご覧ください。
http://naitei-bank.jp/

「内定バンク」では、就活に役立つコンテンツを
これからも続々追加していく予定です。

まだご使用頂いていない後輩の方や知り合いの方々に
今後ご紹介して頂けるととても嬉しいです。

今後も「内定バンク」をよろしくお願いいたします。

-=-=-=-=-=-=-=-
内定バンク
http://naitei-bank.jp/

運営会社
(株)エスキュービズム
http://s-cubism.jp/
-=-=-=-=-=-=-=-