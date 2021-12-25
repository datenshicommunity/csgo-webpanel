<?php /* Smarty version 2.6.31, created on 2021-12-21 17:49:19
         compiled from page_admin_edit_admins_group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_edit_admins_group.tpl', 57, false),)), $this); ?>
<form action="" method="post">
	<div id="admin-page-content">
		<div class="row">
			<div class="col-lg-12 grid-margin">
				<div class="card">
					<div class="card-body" id="add-group">
						<h3>Admin Groups</h3>
						<p>For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
							Choose the new groups that you want <b><?php echo $this->_tpl_vars['group_admin_name']; ?>
</b> to appear in.
						</p>
						<br /><br />
						<div class="table-responsive">
							<table class="table" id="group.details">
								<tr>
									<td valign="middle">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Choose the group you want this admin to appear in for web permissions"></i>
										Web Admin Group
									</td>
									<td>
										<div align="left" id="wadmingroup">
											<select name="wg" id="wg" class="form-control">
												<option value="-1">No Group</option>
												<optgroup label="Groups" style="font-weight:bold;">
													<?php $_from = $this->_tpl_vars['web_lst']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wg']):
?>
													<option value="<?php echo $this->_tpl_vars['wg']['gid']; ?>
"<?php if ($this->_tpl_vars['wg']['gid'] == $this->_tpl_vars['group_admin_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['wg']['name']; ?>
</option>
													<?php endforeach; endif; unset($_from); ?>
												</optgroup>
											</select>
										</div>
										<div id="wgroup.msg" class="badentry"></div>
									</td>
								</tr>
								<tr id="nsgroup" valign="top" style="height:5px;overflow:hidden;">
								</tr>
								<tr>
									<td valign="middle">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Choose the group you want this admin to appear in for server admin permissions"></i>
										Server Admin Group 
									</td>
									<td>
										<div align="left" id="wadmingroup">
											<select name="sg" id="sg" class="form-control">
												<option value="-1">No Group</option>
												<optgroup label="Groups" style="font-weight:bold;">
													<?php $_from = $this->_tpl_vars['group_lst']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sg']):
?>
													<option value="<?php echo $this->_tpl_vars['sg']['id']; ?>
"<?php if ($this->_tpl_vars['sg']['id'] == $this->_tpl_vars['server_admin_group_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['sg']['name']; ?>
</option>
													<?php endforeach; endif; unset($_from); ?>
												</optgroup>
											</select>
										</div>
										<div id="sgroup.msg" class="badentry"></div>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<?php echo smarty_function_sb_button(array('text' => 'Save Changes','class' => 'ok','id' => 'agroups','submit' => true), $this);?>

										&nbsp;
										<?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aback'), $this);?>

									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>