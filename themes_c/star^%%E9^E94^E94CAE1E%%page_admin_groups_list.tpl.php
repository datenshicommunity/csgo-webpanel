<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:11
         compiled from page_admin_groups_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'page_admin_groups_list.tpl', 46, false),array('modifier', 'htmlspecialchars', 'page_admin_groups_list.tpl', 139, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_listgroups']): ?>
Access Denied!
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Groups</h3>
				<p>Click on a group to view its permissions.</p>
				<br /><br />
				<!-- Web Admin Groups -->
				<div class="table-responsive" id="wag_collapseGroup">
					Web Admin Groups <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total: <?php echo $this->_tpl_vars['web_group_count']; ?>
</i>
					<table class="table">
						<thead>
							<tr>
								<th width="40%">Group Name</th>
								<th width="25%">Admins in group</th>
								<th width="30%">Action</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['web_group_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['web_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['web_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['web_group']['iteration']++;
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#wad_<?php echo $this->_tpl_vars['group']['gid']; ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
							<td><?php echo $this->_tpl_vars['web_admins'][($this->_foreach['web_group']['iteration']-1)]; ?>
</td>
							<td> 
								<?php if ($this->_tpl_vars['permission_editgroup']): ?>
								<a href="index.php?p=admin&c=groups&o=edit&type=web&id=<?php echo $this->_tpl_vars['group']['gid']; ?>
">Edit</a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['permission_deletegroup']): ?>
								- <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['gid']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'web');">Delete</a>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td colspan="7" align="center" style="padding:0;">
								<div class="collapse col-sm-9" id="wad_<?php echo $this->_tpl_vars['group']['gid']; ?>
"  data-parent="#wag_collapseGroup">
									<table class="table tbl-sm">
										<thead>
											<tr>
												<th align="left" colspan="3">Group Details</th>
											</tr>
										</thead>
										<tr align="left">
											<td width="20%" >Permissions</td>
											<td ><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['permissions'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>") : smarty_modifier_replace($_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>")); ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Members</td>
											<td >
												<table width="100%" cellspacing="0" cellpadding="0" class="listtable">
													<?php $_from = $this->_tpl_vars['web_admins_list'][($this->_foreach['web_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['web_admin']):
?>
													<tr>
														<td ><?php echo $this->_tpl_vars['web_admin']['user']; ?>
</td>
														<?php if ($this->_tpl_vars['permission_editadmin']): ?>
														<td width="30%" ><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['web_admin']['aid']; ?>
" title="Edit Groups">Edit</a>
															- <a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['web_admin']['aid']; ?>
&wg=" title="Remove From Group">Remove</a>
														</td>
														<?php endif; ?>
													</tr>
													<?php endforeach; endif; unset($_from); ?>
												</table>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
				<br /><br />
				<!-- Server Admin Groups -->
				<div class="table-responsive" id="sag_collapseGroup">
					Server Admin Groups <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total: <?php echo $this->_tpl_vars['server_admin_group_count']; ?>
</i>
					<table class="table">
						<thead>
							<tr>
								<th width="40%">Group Name</th>
								<th width="25%">Admins in group</th>
								<th width="30%">Action</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['server_group_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['server_admin_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['server_admin_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['server_admin_group']['iteration']++;
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#sag_<?php echo $this->_tpl_vars['group']['id']; ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
							<td><?php echo $this->_tpl_vars['server_admins'][($this->_foreach['server_admin_group']['iteration']-1)]; ?>
</td>
							<td> 
								<?php if ($this->_tpl_vars['permission_editgroup']): ?>
								<a href="index.php?p=admin&c=groups&o=edit&type=srv&id=<?php echo $this->_tpl_vars['group']['id']; ?>
">Edit</a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['permission_deletegroup']): ?>
								- <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['id']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'srv');">Delete</a>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td colspan="7" align="center" style="padding:0;">
								<div class="collapse col-sm-9" id="sag_<?php echo $this->_tpl_vars['group']['id']; ?>
"  data-parent="#sag_collapseGroup">
									<table class="table tbl-sm">
										<tr>
											<td align="left" colspan="3">
												Group Details          
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Permissions</td>
											<td ><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['permissions'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>") : smarty_modifier_replace($_tmp, "&bull;", "<span style=\"color:#1b75d1;\">&bull;</span>")); ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Members</td>
											<td >
												<table width="100%" cellspacing="0" cellpadding="0" class="listtable">
													<?php $_from = $this->_tpl_vars['server_admins_list'][($this->_foreach['server_admin_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server_admin']):
?>
													<tr>
														<td><?php echo $this->_tpl_vars['server_admin']['user']; ?>
</td>
														<?php if ($this->_tpl_vars['permission_editadmin']): ?>
														<td width="30%" ><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['server_admin']['aid']; ?>
" title="Edit Groups">Edit</a>
															- <a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['server_admin']['aid']; ?>
&sg=" title="Remove From Group">Remove</a>
														</td>
														<?php endif; ?>
													</tr>
													<?php endforeach; endif; unset($_from); ?>
												</table>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Overrides</td>
											<td >
												<table width="100%" cellspacing="0" cellpadding="0" class="listtable">
													<tr>
														<td>Type</td>
														<td>Name</td>
														<td>Access</td>
													</tr>
													<?php $_from = $this->_tpl_vars['server_overrides_list'][($this->_foreach['server_admin_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['override']):
?>
													<tr>
														<td width="60%"><?php echo $this->_tpl_vars['override']['type']; ?>
</td>
														<td width="60%"><?php echo ((is_array($_tmp=$this->_tpl_vars['override']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</td>
														<td width="60%"><?php echo $this->_tpl_vars['override']['access']; ?>
</td>
													</tr>
													<?php endforeach; endif; unset($_from); ?>
												</table>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
				<br /><br />
				<!-- Server Groups -->
				<div class="table-responsive" id="sg_collapseGroup">
					Server Groups <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total: <?php echo $this->_tpl_vars['server_group_count']; ?>
</i>
					<table class="table">
						<thead>
							<tr>
								<th width="40%">Group Name</th>
								<th width="25%">Servers in group</th>
								<th width="30%">Action</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['server_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['server_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['server_group']['iteration']++;
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#sg_<?php echo $this->_tpl_vars['group']['gid']; ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
							<td><?php echo $this->_tpl_vars['server_counts'][($this->_foreach['server_group']['iteration']-1)]; ?>
</td>
							<td>   
								<?php if ($this->_tpl_vars['permission_editgroup']): ?>
								<a href="index.php?p=admin&c=groups&o=edit&type=server&id=<?php echo $this->_tpl_vars['group']['gid']; ?>
">Edit</a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['permission_deletegroup']): ?>
								- <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['gid']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'server');">Delete</a>
								<?php endif; ?>        
							</td>
						</tr>
						<tr>
							<td colspan="7" align="center" style="padding:0;">
								<div class="collapse col-sm-9" id="sg_<?php echo $this->_tpl_vars['group']['gid']; ?>
"  data-parent="#sg_collapseGroup">
									<table class="table tbl-sm">
										<tr>
											<td align="left" colspan="3">Servers in this group</td>
										</tr>
										<tr align="left">
											<td width="20%" >Server Names</td>
											<td  id="servers_<?php echo $this->_tpl_vars['group']['gid']; ?>
">
												Please Wait!
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>