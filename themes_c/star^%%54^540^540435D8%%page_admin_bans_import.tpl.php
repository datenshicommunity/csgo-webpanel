<?php /* Smarty version 2.6.31, created on 2021-12-25 14:59:47
         compiled from page_admin_bans_import.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_bans_import.tpl', 47, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_import']): ?>
Access Denied!
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body" id="add-group1">
				<h3>Import Bans</h3>
				<p>For more information or help regarding a certain subject move your mouse over the question mark.</p>
				<br /><br />
				<div class="table-responsive">
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="action" value="importBans" />
						<table class="table table-striped" id="group.details">
							<tr>
								<td>
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Select the banned_users.cfg or banned_ip.cfg file to upload and add bans."></i>
										File 
									</div>
								</td>
								<td>
									<div align="left">
										<input type="file" TABINDEX=1 class="form-control" id="importFile" name="importFile" />
									</div>
									<div id="file.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="right" title="Check this box, if you want to get the names of the players from their steam community profile.(just works with banned_users.cfg)"></i>
									Get Names
								</td>
								<td>
									<div align="left">
										<div class="form-check" id="loginRememberMeDiv">
											<label class="form-check-label">
											<input id="friendsname" type="checkbox" name="friendsname" vspace="5px" class="form-check-input"> &nbsp;
											<i class="input-helper"></i></label>
										</div>
									</div>
									<div id="friendsname.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<?php echo smarty_function_sb_button(array('text' => 'Import','class' => 'ok','id' => 'iban','submit' => true), $this);?>

									&nbsp;
									<?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'iback'), $this);?>

								</td>
							</tr>
						</table>
				</div>
				</form>
				<?php if (! $this->_tpl_vars['extreq']): ?>
				<script type="text/javascript">
					$('friendsname').disabled = true;
				</script>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>