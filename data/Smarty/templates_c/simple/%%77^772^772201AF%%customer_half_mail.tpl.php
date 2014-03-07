<?php /* Smarty version 2.6.26, created on 2014-01-09 11:04:06
         compiled from mail_templates/customer_half_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/customer_half_mail.tpl', 6, false),)), $this); ?>
┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、「内定バンク」に会員登録をされた方にお送りしています。
　お心当りが無い場合、その旨をこのメールにご返信頂ければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo ((is_array($_tmp=$this->_tpl_vars['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 様

この度は「内定バンク」にご登録頂き、有り難うございます。

現在は【仮登録】の状態です。
コンテンツは、本登録が完了し次第ご覧頂けるようになります。

--------------------------------
●お支払いについて

銀行振込(前払い)決済をご指定いただきましたので
下記口座に[合計]の金額を3日以内にお振込み下さい｡

[振込口座] みずほ銀行　浜松町支店　普通　1382048
[口座名義] カ)エスキュービズム
[振込金額] <?php echo ((is_array($_tmp=@CUSTOMER_COST_LABEL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 (円)
※振込手数料はご負担願います。

※振込み名義がご注文者様と異なる場合は必ずご連絡下さい。
　特定が出来ず、確認が遅れる場合がございます。
--------------------------------

入金の確認後、通常翌営業日までに本会員登録のご案内を
差し上げています。

その他、ご不明点が有りましたらお気軽にお問い合わせ下さい。
<?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>


-=-=-=-=-=-=-=-
内定バンク
http://naitei-bank.jp/

運営会社
(株)エスキュービズム
http://s-cubism.jp/
-=-=-=-=-=-=-=-