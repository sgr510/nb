<?php /* Smarty version 2.6.26, created on 2014-01-27 21:25:11
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/shopping/deliv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/shopping/deliv.tpl', 26, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/sphone/shopping/deliv.tpl', 26, false),)), $this); ?>

<!--▼コンテンツここから -->
<section id="undercolumn">

    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

    <!--★インフォメーション★-->
    <div class="information">
        <p>一覧よりお届け先住所を選択してください。</p>
    </div>

    <!--▼フォームここから -->
    <div class="form_area">
        <form name="form1" id="form1" method="post" action="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
shopping/deliv.php">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="customer_addr" />
            <input type="hidden" name="uniqid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_uniqid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="other_deliv_id" value="" />
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['deli'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <p class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['deli'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>
            <?php endif; ?>

            <?php if (((is_array($_tmp=@USE_MULTIPLE_SHIPPING)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?>
                <!--☆右にスライドボタン -->
                <div class="bubbleBox">
                    <div class="bubble_announce clearfix">
                        <p class="fb"><a rel="external" href="javascript:fnModeSubmit('multiple', '', '');">複数のお届け先に送りますか？</a></p>
                    </div>
                    <div class="bubble_arrow_line"><!--矢印空タグ --></div>
                    <div class="bubble_arrow"><!--矢印空タグ --></div>
                </div>
            <?php endif; ?>

            <div class="formBox">
                <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrAddr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <dl class="deliv_check">
                        <?php if (((is_array($_tmp=$this->_sections['cnt']['first'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <dt class="first">
                                <p>
                                    <input type="radio" name="deliv_check" id="chk_id_<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="-1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['deliv_check']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == "" || ((is_array($_tmp=$this->_tpl_vars['arrForm']['deliv_check']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == -1): ?> checked="checked"<?php endif; ?> class="data-role-none" />
                                    <label for="chk_id_<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">会員登録住所</label>
                                </p>
                            </dt>
                        <?php else: ?>
                            <dt>
                                <p>
                                    <input type="radio" name="deliv_check" id="chk_id_<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['deliv_check']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> checked="checked"<?php endif; ?> class="data-role-none" />
                                    <label for="chk_id_<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">追加登録住所</label>
                                </p>
                                <ul class="edit">
                                    <li><a rel="external" href="javascript:void(0);" onclick="win02('<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/delivery_addr.php?page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['SCRIPT_NAME'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;other_deliv_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','new_deiv','600','640'); return false;" class="b_edit">編集</a></li>
                                    <li><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_delete.png" width="21" height="20" alt="削除" onclick="fnModeSubmit('delete', 'other_deliv_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['other_deliv_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');" /></li>
                                </ul>
                            </dt>
                        <?php endif; ?>
                        <dd <?php if (((is_array($_tmp=$this->_sections['cnt']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ! ( ((is_array($_tmp=$this->_tpl_vars['tpl_addrmax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < ((is_array($_tmp=@DELIV_ADDR_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>class="end"<?php endif; ?>>
                            <?php $this->assign('key', ((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrAddr'][$this->_sections['cnt']['index']]['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                        </dd>
                    </dl>
                <?php endfor; endif; ?>

                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_addrmax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < ((is_array($_tmp=@DELIV_ADDR_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <div class="inner">
                        <a rel="external" href="javascript:void(0);" onclick="win02('<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/delivery_addr.php?page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['SCRIPT_NAME'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
','new_deiv','600','640'); return false;" class="btn_sub addbtn">新しいお届け先を追加</a>
                    </div>
                <?php endif; ?>
            </div><!-- /.formBox -->

            <ul class="btn_btm">
                <li><a rel="external" href="javascript:fnModeSubmit('customer_addr','','');" class="btn">選択したお届け先に送る</a></li>
                <li><a rel="external" href="<?php echo ((is_array($_tmp=@CART_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn_back">戻る</a></li>
            </ul>

        </form>
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
<!--▲コンテンツここまで -->