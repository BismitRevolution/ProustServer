<?php /* Smarty version 2.6.26, created on 2017-11-09 16:56:38
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 24, false),array('function', 'call_hook', 'common/footer.tpl', 30, false),array('function', 'get_debug_info', 'common/footer.tpl', 42, false),)), $this); ?>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
<?php echo ''; ?><?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('printIssn')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['displayCreativeCommons']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?><?php echo ''; ?><?php endif; ?><?php echo '<div id="pageFooter">'; ?><?php if ($this->_tpl_vars['pageFooter']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageFooter']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?><?php echo '<div id="standardFooter">'; ?><?php if ($this->_tpl_vars['issn']): ?><?php echo '<p>ISSN: '; ?><?php echo $this->_tpl_vars['issn']; ?><?php echo '</p>'; ?><?php endif; ?><?php echo '</div>'; ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/themes/mpg/js/menu.js"></script>
</div>


<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>


</body>
</html>