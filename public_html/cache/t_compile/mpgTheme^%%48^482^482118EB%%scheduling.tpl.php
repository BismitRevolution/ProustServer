<?php /* Smarty version 2.6.26, created on 2018-04-17 17:25:45
         compiled from layoutEditor/submission/scheduling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'layoutEditor/submission/scheduling.tpl', 12, false),array('function', 'url', 'layoutEditor/submission/scheduling.tpl', 24, false),array('modifier', 'assign', 'layoutEditor/submission/scheduling.tpl', 17, false),)), $this); ?>
<div id="scheduling" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduling"), $this);?>
</h3>
<p>
<?php if ($this->_tpl_vars['issue']): ?>
	<?php $this->assign('issueName', $this->_tpl_vars['issue']->getIssueIdentification()); ?>
<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduledIn.tba"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'issueName') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'issueName'));?>

<?php endif; ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.scheduledIn",'issueName' => $this->_tpl_vars['issueName']), $this);?>


<?php if ($this->_tpl_vars['issue']): ?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
	<?php else: ?>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => $this->_tpl_vars['issue']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
	<?php endif; ?>
<?php endif; ?>
</p>
</div>