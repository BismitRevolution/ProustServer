<?php /* Smarty version 2.6.26, created on 2018-04-17 18:29:59
         compiled from proofreader/submission/scheduling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'proofreader/submission/scheduling.tpl', 12, false),array('function', 'url', 'proofreader/submission/scheduling.tpl', 23, false),array('modifier', 'assign', 'proofreader/submission/scheduling.tpl', 17, false),)), $this); ?>
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
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a>
<?php endif; ?>
</p>
</div>