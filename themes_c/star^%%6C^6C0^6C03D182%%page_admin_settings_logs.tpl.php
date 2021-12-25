<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from page_admin_settings_logs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'page_admin_settings_logs.tpl', 5, false),array('block', 'textformat', 'page_admin_settings_logs.tpl', 58, false),)), $this); ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>System Log <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['clear_logs'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'href', 'class="btn btn-outline-primary btn-rounded btn-fw" href') : smarty_modifier_replace($_tmp, 'href', 'class="btn btn-outline-primary btn-rounded btn-fw" href')))) ? $this->_run_mod_handler('replace', true, $_tmp, '(', '') : smarty_modifier_replace($_tmp, '(', '')))) ? $this->_run_mod_handler('replace', true, $_tmp, ')', '') : smarty_modifier_replace($_tmp, ')', '')); ?>
</h4></h3>
				<p>Click on a row to see more details about the event.</p>
				<br /><br />
				<?php  require (TEMPLATES_PATH . "/admin.log.search.php"); ?>
				<div class="table-responsive" id="loglist">
				<div class="col-12 my-2 text-xl-right text-lg-left">
					<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
						<?php echo $this->_tpl_vars['page_numbers']; ?>

					</div>
				</div>
					<?php echo '
					<style>
						.imgfix2 > img { width:16px !important; height:16px !important;}
					</style>
					'; ?>

					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<th width="5%" class="listtable_top" align="center">Type</th>
								<th width="28%" class="listtable_top" align="center">Event</th>
								<th width="28%" class="listtable_top" align="center">User</th>
								<th class="listtable_top">Date/Time</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['log_items']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fe_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_log']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['log']):
        $this->_foreach['fe_log']['iteration']++;
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_<?php echo ($this->_foreach['fe_log']['iteration']-1); ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td align="center" class="imgfix2"><?php echo $this->_tpl_vars['log']['type_img']; ?>
</td>
							<td><?php echo $this->_tpl_vars['log']['title']; ?>
</td>
							<td><?php echo $this->_tpl_vars['log']['user']; ?>
</td>
							<td><?php echo $this->_tpl_vars['log']['date_str']; ?>
</td>
						</tr>
						<tr></tr>
						<tr>
							<td colspan="7" align="center" style="padding:0;">
								<div class="collapse" id="expand_<?php echo ($this->_foreach['fe_log']['iteration']-1); ?>
" data-parent="#loglist">
									<table class="table tbl-sm" width="80%" style="width:80% !important;">
										<thead>
											<tr>
												<th align="left" colspan="3">
													Event Details
												</th>
											</tr>
										</thead>
										<tr align="left">
											<td width="20%" >Details</td>
											<td><?php echo $this->_tpl_vars['log']['message']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Parent Function</td>
											<td><?php echo $this->_tpl_vars['log']['function']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Query String</td>
											<td><?php $this->_tag_stack[] = array('textformat', array('wrap' => 62,'wrap_cut' => true)); $_block_repeat=true;smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['log']['query']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
										</tr>
										<tr align="left">
											<td width="20%" >IP</td>
											<td><?php echo $this->_tpl_vars['log']['host']; ?>
</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<div class="col-12 my-2 text-xl-right text-lg-left">
					<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2"><?php echo $this->_tpl_vars['page_numbers']; ?>
</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	InitAccordion('tr.opener', 'div.opener', 'mainwrapper');
</script>