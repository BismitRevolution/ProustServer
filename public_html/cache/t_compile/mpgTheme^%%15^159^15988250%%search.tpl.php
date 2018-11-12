<?php /* Smarty version 2.6.26, created on 2017-11-07 12:19:54
         compiled from common/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/search.tpl', 10, false),array('function', 'translate', 'common/search.tpl', 12, false),)), $this); ?>

<div id="searchbar">
<form id="simpleSearchForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
">							
	<input name="search box" type="search" aria-label="Search" value="" class="textField" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
" class="button" />
</form>
</div>