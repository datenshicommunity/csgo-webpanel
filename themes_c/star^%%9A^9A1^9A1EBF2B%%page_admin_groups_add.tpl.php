<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:11
         compiled from page_admin_groups_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_groups_add.tpl', 50, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_addgroup']): ?>
Access Denied!
<?php else: ?>
<div class="row" id="add-group">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>New Groups</h3>
				<div class="table-responsive" id="group.details">
					<table class="table table-striped">
						<tr>
							<td valign="top" width="35%">
								<div class="rowdesc">
									<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Type the name of the new group you want to create."></i>
									Group Name 
								</div>
							</td>
							<td>
								<div align="left">
									<input type="text" TABINDEX=1 class="form-control" id="groupname" name="groupname" />
								</div>
								<div id="name.msg" class="badentry"></div>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<div class="rowdesc">
									<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="This defines the type of group you are about to create. This helps identify and catagorize the groups list."></i>
									Group Type 
								</div>
							</td>
							<td>
								<div align="left">
									<select onchange="UpdateGroupPermissionCheckBoxes()" TABINDEX=2 class="form-control" name="grouptype" id="grouptype">
										<option value="0">Please Select...</option>
										<option value="1">Web Admin Group</option>
										<option value="2">Server Admin Group</option>
										<option value="3">Server Group</option>
									</select>
								</div>
								<div id="type.msg" class="badentry"></div>
							</td>
						</tr>
						<tr>
							<td colspan="2" id="perms" valign="top" style="height:5px;overflow:hidden;"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>      
								<?php echo smarty_function_sb_button(array('text' => 'Save Changes','onclick' => "ProcessGroup();",'class' => 'ok','id' => 'agroup','submit' => false), $this);?>

								&nbsp;
								<?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'back','submit' => false), $this);?>
 
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>