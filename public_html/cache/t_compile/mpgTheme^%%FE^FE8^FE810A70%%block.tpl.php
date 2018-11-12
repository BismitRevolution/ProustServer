<?php /* Smarty version 2.6.26, created on 2018-03-13 12:42:22
         compiled from file:/home/proust/public_html/plugins/blocks/relatedItems/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/proust/public_html/plugins/blocks/relatedItems/block.tpl', 20, false),array('function', 'url', 'file:/home/proust/public_html/plugins/blocks/relatedItems/block.tpl', 31, false),array('modifier', 'to_array', 'file:/home/proust/public_html/plugins/blocks/relatedItems/block.tpl', 31, false),array('modifier', 'escape', 'file:/home/proust/public_html/plugins/blocks/relatedItems/block.tpl', 31, false),)), $this); ?>

<?php if ($this->_tpl_vars['journalRt'] && $this->_tpl_vars['journalRt']->getEnabled() && $this->_tpl_vars['journalRt']->getDefineTerms() && $this->_tpl_vars['version']): ?>

<script type="text/javascript">
	<?php echo 'initRelatedItems();'; ?>

</script>


<div class="block" id="sidebarRTRelatedItems">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.relatedItems.title"), $this);?>
</span>
		<table width="100%">
			<tr>
				<td valign="top" style="width:26px;">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/relatedItems/icons/lookupTerms.png" class="articleToolIcon" alt=""/>
				</td>
				<td valign="top">
					<div id="relatedItems">
						<ul class="plain">
						<?php $_from = $this->_tpl_vars['version']->getContexts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
							<?php if (! $this->_tpl_vars['context']->getDefineTerms()): ?>
								<li><a href="javascript:openRTWindowWithToolbar('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'context','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['context']->getContextId()))), $this);?>
');"><?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<div id="toggleRelatedItems">
						<a id="hideRelatedItems" style="display:none;" href="javascript:void(0)">
							<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/relatedItems/icons/magnifier_zoom_out.png" alt=""/> 
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.relatedItems.hide"), $this);?>

						</a>
						<a id="showRelatedItems" href="javascript:void(0)">
							<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/relatedItems/icons/magnifier_zoom_in.png" alt=""/>
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.relatedItems.show"), $this);?>

						</a>
					</div>
				</td>
			</tr>
		</table>
</div>

<?php endif; ?>