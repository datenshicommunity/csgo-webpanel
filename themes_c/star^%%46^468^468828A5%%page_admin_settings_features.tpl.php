<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from page_admin_settings_features.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_settings_features.tpl', 131, false),)), $this); ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Ban Features</h3>
				<p>For more information or help regarding a certain subject move your mouse over the question mark</p>
				<br /><br />
				<div class="table-responsive">
					<form action="" method="post">
						<input type="hidden" name="settingsGroup" value="features" />
						<table class="table table-striped" id="group.features">
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box to enable the entire ban list to be publically downloaded and shared."></i>
										Make Export Bans Public
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-check">
											<label class="form-check-label">
											<input id="export_public" type="checkbox" name="export_public" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box to kick a player when a ban is posted."></i>
										Enable KickIt
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_kickit" type="checkbox" name="enable_kickit" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box, if you want to enable banning of whole steam community groups."></i>
										Enable Group Banning
									</div>
								</td>
								<td>
									<div align="left">
										<?php if ($this->_tpl_vars['steamapi']): ?>
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_groupbanning" type="checkbox" name="enable_groupbanning" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
										<?php else: ?>
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_groupbanning" type="checkbox" name="enable_groupbanning" vspace="5px" class="form-check-input" disabled>&nbsp;
											<i class="input-helper"></i></label>
										</div>
										<br/>You haven't set a valid steamapi key in the config
										<?php endif; ?>
									</div>
									<div id="enable_groupbanning.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box, if you want to enable banning all steam community friends of a player."></i>
										Enable Friends Banning
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_friendsbanning" type="checkbox" name="enable_friendsbanning" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
									<div id="enable_friendsbanning.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box, if you want to enable the admin rehashing everytime an admin/group has been changed."></i>
										Enable Admin Rehashing
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_adminrehashing" type="checkbox" name="enable_adminrehashing" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
									<div id="enable_adminrehashing.msg" class="badentry"></div>
								</td>
							</tr>
							<!-- added for steam login option mod -->
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Check this box, if you want to enable the Normal login option on the login form."></i>
										Enable Normal Login
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-check">
											<label class="form-check-label">
											<input id="enable_steamlogin" type="checkbox" name="enable_steamlogin" vspace="5px" class="form-check-input">&nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
									<div id="enable_steamlogin.msg" class="badentry"></div>
								</td>
							</tr>
							<!-- end steam login option mod -->
							<tr>
								<td colspan="2" align="center">
									<?php echo smarty_function_sb_button(array('text' => 'Save Changes','class' => 'ok','id' => 'fsettings','submit' => true), $this);?>

									&nbsp;
									<?php echo smarty_function_sb_button(array('text' => 'Back','class' => 'cancel','id' => 'fback'), $this);?>

								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>