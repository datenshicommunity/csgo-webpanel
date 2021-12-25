<?php /* Smarty version 2.6.31, created on 2021-12-21 17:49:12
         compiled from page_admin_admins_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'page_admin_admins_list.tpl', 45, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_listadmin']): ?>
Access Denied
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Admins <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total Admins:<?php echo $this->_tpl_vars['admin_count']; ?>
</i></h3>
				<p>
					Click on an admin to see more detailed information and actions to perform on them.
				</p>
				<br /><br />
				<?php  require (TEMPLATES_PATH . "/admin.admins.search.php"); ?>
				<div id="banlist" class="table-responsive">
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['admin_nav']; ?>

						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="34%">Name</th>
								<th width="33%">Server Admin Group </th>
								<th width="33%">Web Admin Group</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['admins']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_<?php echo $this->_tpl_vars['admin']['aid']; ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td><?php echo $this->_tpl_vars['admin']['user']; ?>
 (<a href="./index.php?p=banlist&advSearch=<?php echo $this->_tpl_vars['admin']['aid']; ?>
&advType=admin" title="Show bans"><?php echo $this->_tpl_vars['admin']['bancount']; ?>
 bans</a> | <a href="./index.php?p=banlist&advSearch=<?php echo $this->_tpl_vars['admin']['aid']; ?>
&advType=nodemo" title="Show bans without demo"><?php echo $this->_tpl_vars['admin']['nodemocount']; ?>
 w.d.</a>)</td>
							<td><?php echo $this->_tpl_vars['admin']['server_group']; ?>
</td>
							<td><?php echo $this->_tpl_vars['admin']['web_group']; ?>
</td>
						</tr>
						<tr>
							<td colspan="3">
								<div class="collapse" id="expand_<?php echo $this->_tpl_vars['admin']['aid']; ?>
" data-parent="#banlist">
									<b>Admin Details of <?php echo $this->_tpl_vars['admin']['user']; ?>
</b>
									<table class="table table-sm">
										<tr align="left">
											<td width="35%">Server Admin Permissions</td>
											<td width="35%">Web Admin Permissions</td>
											<td width="30%">Action</td>
										</tr>
										<tr align="left">
											<td style="vertical-align:top !important;"><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['server_flag_string'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>") : smarty_modifier_replace($_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>")); ?>
</td>
											<td style="vertical-align:top !important;"><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['web_flag_string'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>") : smarty_modifier_replace($_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>")); ?>
</td>
											<td width="30%" style="vertical-align:top !important;">
												<div class="ban-edit">
													<?php echo '
													<style>
														.list-arrow > li > a > img { width:16px; height:16px;}
														.imgfix > a > img { width:16px; height:16px;}
													</style>
													'; ?>

													<ul class="list-arrow">
														<?php if ($this->_tpl_vars['permission_editadmin']): ?>
														<li>
															<a href="index.php?p=admin&c=admins&o=editdetails&id=<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><i class="menu-icon mdi mdi-account-edit"></i> Edit Details</a>
														</li>
														<li>
															<a href="index.php?p=admin&c=admins&o=editpermissions&id=<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><i class="menu-icon mdi mdi-key-variant"></i> Edit Permissions</a>
														</li>
														<li>
															<a href="index.php?p=admin&c=admins&o=editservers&id=<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><i class="menu-icon mdi mdi-server-network"></i> Edit Server Access</a>
														</li>
														<li>
															<a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><i class="menu-icon mdi mdi-account-multiple"></i> Edit Groups</a>
														</li>
														<?php endif; ?>
														<?php if ($this->_tpl_vars['permission_deleteadmin']): ?>
														<li>
															<a href="#" onclick="RemoveAdmin(<?php echo $this->_tpl_vars['admin']['aid']; ?>
, '<?php echo $this->_tpl_vars['admin']['user']; ?>
');"><i class="menu-icon mdi mdi-delete"></i> Delete Admin</a>
														</li>
														<?php endif; ?>
													</ul>
												</div>
												<div>Immunity Level: <?php echo $this->_tpl_vars['admin']['immunity']; ?>
</div>
												<div>Last Visited: <small><?php echo $this->_tpl_vars['admin']['lastvisit']; ?>
</small></div>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['admin_nav']; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">InitAccordion('tr.opener', 'div.opener', 'mainwrapper');</script>
<?php endif; ?>