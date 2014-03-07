<?php /* Smarty version 2.6.26, created on 2014-01-09 10:42:37
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/search_products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/search_products.tpl', 27, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/search_products.tpl', 50, false),array('function', 'html_options', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/search_products.tpl', 34, false),)), $this); ?>
<div class="bloc_outer">
    <div id="search_area">
    <h2><span class="title"><span class="square">■</span>検索条件</span></h2>
        <div class="bloc_body">
            <!--検索フォーム-->
            <form name="search_form" id="search_form" method="get" action="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <dl class="formlist">
                <dt>カテゴリー</dt>
                <dd><input type="hidden" name="mode" value="search" />
                <select name="category_id" class="box145">
                    <option label="すべてのカテゴリー" value="">全てのカテゴリー</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrCatList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
                </dd>
            </dl>
            <dl class="formlist">
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrMakerList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <dt>メーカーから選ぶ</dt>
                <dd><select name="maker_id" class="box145">
                    <option label="すべてのメーカー" value="">すべてのメーカー</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrMakerList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
                </dd>
            </dl>
            <dl class="formlist">
                <?php endif; ?>
                <dt>キーワード</dt>
                <dd><input type="text" name="name" class="box140" maxlength="50" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" /></dd>
            </dl>
            <p class="btn"><input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_search_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_search.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_search.jpg" alt="検索" name="search" /></p>
            </form>
        </div>
    </div>
</div>