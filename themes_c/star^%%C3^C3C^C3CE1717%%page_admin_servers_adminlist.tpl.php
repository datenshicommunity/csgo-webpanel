<?php /* Smarty version 2.6.31, created on 2021-12-25 15:02:55
         compiled from page_admin_servers_adminlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'page_admin_servers_adminlist.tpl', 18, false),)), $this); ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Admins on this server <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Count:<?php echo $this->_tpl_vars['admin_count']; ?>
</i></h3>
				<br /><br />
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="50%">Admin Name</th>
								<th width="50%">Admin SteamID</th>
							</tr>
						</thead>
						<?php $_from = $this->_tpl_vars['admin_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
						<?php if ($this->_tpl_vars['admin']['user']): ?>
						<tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
							<td class="listtable_1<?php if ($this->_tpl_vars['admin']['ingame']): ?>_unbanned<?php endif; ?>" style="border-bottom: solid 1px #ccc"><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['user'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
							<td class="listtable_1<?php if ($this->_tpl_vars['admin']['ingame']): ?>_unbanned<?php endif; ?>" style="border-bottom: solid 1px #ccc"><?php echo $this->_tpl_vars['admin']['authid']; ?>
</td>
						</tr>
						<tr align="left">
							<td colspan="7" align="center">
								<div class="opener">
									<?php if ($this->_tpl_vars['admin']['ingame']): ?>
									<table width="80%" cellspacing="0" cellpadding="0" class="listtable">
										<tr>
											<td align="left" colspan="5">
												Admin Details Ingame
											</td>
										</tr>
										<tr align="left">
											<td width="30%">Name</td>
											<td width="20%">Steam ID</td>
											<td width="20%">IP</td>
											<td width="20%">Time</td>
											<td width="20%">Ping</td>
										</tr>
										<tr align="left">
											<td>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['iname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

											</td>
											<td>
												<?php echo $this->_tpl_vars['admin']['authid']; ?>

											</td>
											<td>
												<?php echo $this->_tpl_vars['admin']['iip']; ?>

											</td>
											<td>
												<?php echo $this->_tpl_vars['admin']['itime']; ?>

											</td>
											<td>
												<?php echo $this->_tpl_vars['admin']['iping']; ?>

											</td>
										</tr>
									</table>
									<?php endif; ?>
								</div>
							</td>
						</tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>InitAccordion('tr.opener', 'div.opener', 'mainwrapper');</script>