<?php /* Smarty version 2.6.26, created on 2014-01-13 00:04:40
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 26, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 26, false),array('modifier', 'sfDispDBDate', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 35, false),array('modifier', 'sfNoImageMainList', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 62, false),array('modifier', 'u', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 65, false),array('modifier', 'number_format', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 70, false),array('modifier', 'sfCalcIncTax', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 92, false),array('modifier', 'sfMultiply', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 92, false),array('modifier', 'default', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/mypage/history.tpl', 113, false),)), $this); ?>

<section id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <h3 class="title_mypage"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>

    <div class="form_area">
        <div id="historyBox">
            <p>
                <em>注文番号</em>：&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                <em>購入日時</em>：&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)); ?>
<br />
                <em>お支払い方法</em>：&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPayment'][$this->_tpl_vars['tpl_arrOrderData']['payment_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['deliv_time_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                    <br />
                    <em>お届け時間</em>：&nbsp;</strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDelivTime'][$this->_tpl_vars['tpl_arrOrderData']['deliv_time_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['deliv_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                    <br />
                    <em>お届け日</em>：&nbsp;</strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['deliv_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                <?php endif; ?>
            </p>
            
        </div>

        <div class="formBox">
            <!--▼カートの中の商品一覧 -->
            <div class="cartinarea clearfix">

                <!--▼商品 -->
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderDetail'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['orderDetail']):
?>
                    <div>
                        <img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['orderDetail']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=80&amp;height=80" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="photoL" />
                        <div class="cartinContents">
                            <div>
                                <p><em><!--→商品名--><a<?php if (((is_array($_tmp=$this->_tpl_vars['orderDetail']['enable'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"<?php endif; ?> rel="external"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a><!--←商品名--></em></p>
                                <p>
                                    <!--→金額-->
                                    <?php $this->assign('price', ($this->_tpl_vars['orderDetail']['price'])); ?>
                                    <?php $this->assign('quantity', ($this->_tpl_vars['orderDetail']['quantity'])); ?>
                                    <span class="mini">価格:</span><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
円<!--←金額-->
                                </p>

                                <!--→商品種別-->
                                <?php if (((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@PRODUCT_TYPE_DOWNLOAD)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                    <p id="downloadable">
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['orderDetail']['is_downloadable'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                            <a target="_self" href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/download.php?order_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;product_class_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['orderDetail']['product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" rel="external">ダウンロード</a><br />
                                        <?php else: ?>
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['orderDetail']['payment_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == "" && ((is_array($_tmp=$this->_tpl_vars['orderDetail']['effective'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '0'): ?>
                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProductType'][$this->_tpl_vars['orderDetail']['product_type_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />（入金確認中）
                                            <?php else: ?>
                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProductType'][$this->_tpl_vars['orderDetail']['product_type_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />（期限切れ）
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                <!--←商品種別-->
                            </div>

                            <ul>
                                <li><span class="mini">数量：</span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</li>
                                <li class="result"><span class="mini">小計：</span><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfCalcIncTax', true, $_tmp) : SC_Helper_DB_Ex::sfCalcIncTax($_tmp)))) ? $this->_run_mod_handler('sfMultiply', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfMultiply($_tmp, ((is_array($_tmp=$this->_tpl_vars['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
                <!--▲商品 -->

            </div>            <!--▲ カートの中の商品一覧 -->

            <div class="total_area">
                <div><span class="mini">小計：</span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['subtotal'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</div>
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['use_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                    <div><span class="mini">ポイント値引き：</span>&minus;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['use_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</div>
                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['discount'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['discount'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                    <div><span class="mini">値引き：</span>&minus;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['discount'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</div>
                <?php endif; ?>
                <div><span class="mini">送料：</span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['deliv_fee'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</div>
                <div><span class="mini">手数料：</span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['charge'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</div>
                <div><span class="mini">合計：</span><span class="price fb"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['payment_total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</span></div>
                <div><span class="mini">今回加算ポイント：</span><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrOrderData']['add_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
Pt</div>
            </div>
        </div><!-- /.formBox -->

        <!--▼メール一覧 -->
        <div class="formBox">

            <div class="box_header">
                メール配信履歴一覧
            </div>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['tpl_arrMailHistory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
                <!--▼メール -->
                <div class="arrowBox">
                    <p>配信日：<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrMailHistory'][$this->_sections['cnt']['index']]['send_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                        <?php $this->assign('key', ($this->_tpl_vars['tpl_arrMailHistory'][$this->_sections['cnt']['index']]['template_id'])); ?>
                        通知メール：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrMAILTEMPLATE'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</p>
                    <p><a href="javascript:;" onclick="getMailDetail(<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_arrMailHistory'][$this->_sections['cnt']['index']]['send_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)" rel="external"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_arrMailHistory'][$this->_sections['cnt']['index']]['subject'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a></p>
                </div>
                <!--▲メール -->
            <?php endfor; endif; ?>
        </div><!-- /.formBox -->
        <!--▲メール一覧 -->

        <p><a rel="external" class="btn_more" href="./<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">購入履歴一覧に戻る</a></p>

    </div><!-- /.form_area -->

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

<script>
    function getMailDetail(send_id) {
        $.mobile.showPageLoadingMsg();
        $.ajax({
            type: "GET",
            url: "<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/mail_view.php",
            data: "mode=getDetail&send_id=" + send_id,
            cache: false,
            dataType: "json",
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert(textStatus);
                $.mobile.hidePageLoadingMsg();
            },
            success: function(result){
                var maxCnt = 0;
                $("#windowcolumn h2").text('メール詳細');
                $("#windowcolumn a[data-rel=back]").text('購入履歴詳細にもどる');
                $($("#windowcolumn dl.view_detail dt").get(maxCnt)).text(result[0].subject);
                $($("#windowcolumn dl.view_detail dd").get(maxCnt)).html(result[0].mail_body.replace(/\n/g,"<br />"));
                $("#windowcolumn dl.view_detail dd").css('font-family', 'monospace');
                $.mobile.changePage('#windowcolumn', {transition: "slideup"});
                //ダイアログが開き終わるまで待機
                setTimeout( function() {
                                loadingState = 0;
                                $.mobile.hidePageLoadingMsg();
                }, 1000);
            }
        });
    }
</script>