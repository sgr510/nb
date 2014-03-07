<?php /* Smarty version 2.6.26, created on 2014-01-25 21:12:34
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/category.tpl', 36, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/category.tpl', 57, false),array('modifier', 'default', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/category.tpl', 57, false),)), $this); ?>
<script type="text/javascript">//<![CDATA[
    $(function(){
        $('#category_area li.level1:last').css('border-bottom', 'none');
    });
//]]>
</script>
<div class="bloc_outer">
    <div id="category_area">
        <div class="bloc_body">
            <h2><span class="square">■</span>カテゴリー</h2>
            <?php echo '<ul id="categorytree">'; ?><?php $this->assign('preLev', 1); ?><?php echo ''; ?><?php $this->assign('firstdone', 0); ?><?php echo ''; ?><?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrTree'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['category_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "課金コンテンツ"): ?><?php echo ''; ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['display'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo ''; ?><?php $this->assign('level', ($this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['level'])); ?><?php echo ''; ?><?php $this->assign('levdiff', ($this->_tpl_vars['level']-$this->_tpl_vars['preLev'])); ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['levdiff'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?><?php echo '<ul>'; ?><?php elseif (((is_array($_tmp=$this->_tpl_vars['levdiff'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['firstdone'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '</li>'; ?><?php elseif (((is_array($_tmp=$this->_tpl_vars['levdiff'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < 0): ?><?php echo ''; ?><?php unset($this->_sections['d']);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['loop'] = is_array($_loop=($this->_tpl_vars['levdiff']*-1)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?><?php echo '</li></ul>'; ?><?php endfor; endif; ?><?php echo '</li>'; ?><?php endif; ?><?php echo '<li class="level'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['level'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['tpl_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><?php echo ' onmark'; ?><?php endif; ?><?php echo '"><p><a href="'; ?><?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'products/list.php?category_id='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"'; ?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['tpl_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><?php echo ' class="onlink"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['category_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '('; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTree'][$this->_sections['cnt']['index']]['product_count'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?><?php echo ')</a></p>'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['firstdone'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 0): ?><?php echo ''; ?><?php $this->assign('firstdone', 1); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('preLev', ($this->_tpl_vars['level'])); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_sections['cnt']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['preLev']-1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?><?php echo ''; ?><?php unset($this->_sections['d']);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['loop'] = is_array($_loop=($this->_tpl_vars['preLev']-1)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?><?php echo '</li></ul>'; ?><?php endfor; endif; ?><?php echo '</li>'; ?><?php else: ?><?php echo '</li>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '</ul>'; ?>

        </div>
    </div>
</div>

<div class="bloc_outer">
    <div id="category_area">
        <div class="bloc_body">
            <h2><span class="square">■</span>内定獲得報告</h2>
            <div style="padding:5px;">
            あの人気企業から内定を獲得するまでの体験談！<br>
            会社なび/内定バンクしかないオリジナル情報<br>
            <div style="margin:10px 0px 10px 0px;">
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3545">アサツーディ・ケイ</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3544">電通</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3543">ワコール</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3537">三井住友銀行</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3534">野村證券</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3532">三菱商事</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3514">JR東日本</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3501">パナソニック:技術</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3499">NTTデータ</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3488">ANA:客室乗務</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3474">リクルート</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3463">NTTドコモ:技術</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3473">中部電力</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3471">NTT西日本</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3411">アビームコンサル</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3343">三菱UFJモルスタ</a><br />
              <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=3309">コーエーテクモ</a><br />
              &nbsp;&nbsp;：<br>
              &nbsp;&nbsp;：
            </div>
            もちろん、まだある数百社！<br>
            </div>
        </div>
    </div>
</div>