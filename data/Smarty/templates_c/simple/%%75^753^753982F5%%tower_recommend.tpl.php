<?php /* Smarty version 2.6.26, created on 2014-01-09 10:46:34
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 4, false),array('modifier', 'u', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 12, false),array('modifier', 'sfNoImageMainList', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 13, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 13, false),array('modifier', 'replace', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 22, false),array('modifier', 'number_format', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 26, false),array('modifier', 'nl2br', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/tower_recommend.tpl', 29, false),)), $this); ?>
    <div class="block_outer clearfix">
        <div id="recommend_area">
<?php if (0): ?>
            <h2><img src="<?php echo ((is_array($_tmp=@PLUGIN_HTML_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
TowerRecommend/tit_bloc_tower_recommend.jpg" alt="Tower Recommend" class="title_icon" /></h2>
<?php endif; ?>
            <h2>他の就活情報を見る</h2>
            <div class="block_body clearfix">
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tower_recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tower_recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrProduct']):
        $this->_foreach['tower_recommend_products']['iteration']++;
?>
                    <div class="product_item clearfix">
<?php if (0): ?>
                        <div class="productImage">
                            <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
">
                                <img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=80&amp;height=80" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                            </a>
                        </div>
<?php endif; ?>
                        <div class="productContents">
                            <h3>
<?php if (0): ?>
                                <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a>
<?php endif; ?>
                                <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "の通過したES（エントリーシート）", "のES") : smarty_modifier_replace($_tmp, "の通過したES（エントリーシート）", "のES")); ?>
</a>
                            </h3>
<?php if (0): ?>
                            <p class="sale_price">
                                <?php echo ((is_array($_tmp=@SALE_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
(税込)： <span class="price"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 円</span>
                            </p>
<?php endif; ?>
                            <p class="mini comment"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                        </div>
                    </div>
                    <?php if (((is_array($_tmp=$this->_foreach['tower_recommend_products']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) % 2 === 0): ?>
                        <div class="clear"></div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
    </div>
