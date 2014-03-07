<script type="text/javascript">
var arrDeliv = <!--{$arrDeliv}-->;
var extendedBn = '<!--{$landing_cart|h}-->';
$(function() {
    for (key in arrDeliv) {
        if (arrDeliv[key].length > 0) {
            var btn = '<input type="image" src="<!--{$paypal_checkout_button_url}-->" onclick="fnFormModeSubmit(\'form' + key + '\', \'do_express\', \'\', \'\'); return false;" alt="PayPal でチェックアウト" width="145" height="42" />';
            // Move from Dropped item plugin.
            if (extendedBn) {
                $('form#form' + key + ' .formBox .btn_area_btm').remove();
                $('form#form' + key + ' div.btn_area ul li').remove();
                $('.btn_sub').remove();
            }

            $('form#form' + key + ' div.btn_area ul, form#form' + key + ' .tblareabtn')
                .append('<li>' + btn + '</li>');
            var comment = '<p class="alignC">ポイントをご利用になられる場合は、「購入手続きへ」ボタンをクリック後、<!--{if $tpl_login}-->使用するポイントを指定の上、<!--{else}-->ログインして<!--{/if}-->ご購入ください。</p><p class="alignC">「PayPal でチェックアウト」をクリックすると、よりスピーディで、より安全に、お支払いが可能になります。<br />お届け先もPayPal画面でご指定ください。</p>';
            $('form#form' + key + ' div.btn_area').before(comment); // for PC
            $('form#form' + key + ' .tblareabtn').after(comment); // for sphone v2.11.1
            $('form#form' + key + ' .formBox').after($(comment).css({'margin-bottom':'20px', // for sphone v2.11.2
                                                                     'text-align':'center'}))
                                              .after($(btn).css({'margin-right':'auto',
                                                                 'margin-left':'auto',
                                                                 'display':'block'})
                                                           .width(145));
        }
    }
});
</script>
<!--{include file=$include_mainpage}-->
