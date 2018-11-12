<?php /* Smarty version 2.6.26, created on 2017-11-07 12:19:54
         compiled from common/submit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/submit.tpl', 7, false),array('function', 'translate', 'common/submit.tpl', 7, false),)), $this); ?>
<?php if (( $this->_tpl_vars['pageDisplayed'] == 'site' )): ?>
<div id="submit-button" class="largeButton">
	<a href="mailto:publish@gmu.edu">Contact Mason Publishing Group</a>
</div>
<?php else: ?>
<div id="submit-button" class="largeButton">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitArticle"), $this);?>
</em></a>
</div>
<?php endif; ?>