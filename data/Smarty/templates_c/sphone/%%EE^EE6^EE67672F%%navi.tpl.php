<?php /* Smarty version 2.6.26, created on 2014-01-09 11:25:10
         compiled from mypage/navi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mypage/navi.tpl', 28, false),)), $this); ?>

<nav id="mypage_nav">
    <?php echo '<ul>'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ''; ?><?php echo ''; ?><?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li class="nav_favorite" style="width:30%; border-right: 1px solid #FFFFFF; border-top:none;"><a href="favorite.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">お気に入り</a></li>'; ?><?php endif; ?><?php echo ''; ?><?php echo '<li class="nav_change" style="width:40%;  border-left: 1px solid #CCCCCC; border-right: 1px solid #FFFFFF;"><a href="change.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">会員内容変更</a></li><li class="nav_history" style="width:28.5%;  border-left: 1px solid #CCCCCC;"><a href="./'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">購入履歴</a></li>'; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ''; ?><?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li class="nav_favorite" style="width:30%; border-right: 1px solid #FFFFFF; border-top:none;"><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">お気に入り</a></li>'; ?><?php endif; ?><?php echo ''; ?><?php echo '<li class="nav_change" style="width:40%;  border-left: 1px solid #CCCCCC; border-right: 1px solid #FFFFFF;"><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">会員内容変更</a></li><li class="nav_history" style="width:28.5%;  border-left: 1px solid #CCCCCC;"><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '" rel="external">購入履歴</a></li>'; ?><?php echo ''; ?><?php endif; ?><?php echo '</ul>'; ?>

</nav>
<!--▲NAVI-->