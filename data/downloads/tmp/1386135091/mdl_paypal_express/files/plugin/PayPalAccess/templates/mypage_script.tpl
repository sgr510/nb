<!--{include file="`$smarty.const.PLUGIN_UPLOAD_REALDIR`PayPalAccess/templates/login_with_paypal_btn.tpl"}-->
<script type="text/javascript" src="<!--{$smarty.const.PLUGIN_HTML_URLPATH}-->PayPalAccess/jquery.paypalaccess_util.js"></script>
<script type="text/javascript">//<![CDATA[
$(function() {
    $('table.delivname').paypalaccess_util({
        transactionid: '<!--{$transactionid}-->',
        url: '<!--{$smarty.const.PLUGIN_HTML_URLPATH}-->PayPalAccess/'
    });
});
//]]></script>
