<?php /* Smarty version 2.6.31, created on 2021-12-21 17:29:10
         compiled from page_admin_edit_mod.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_edit_mod.tpl', 78, false),)), $this); ?>
<form action="" method="post">
	<div class="row">
		<div class="col-lg-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h3>Mod Details</h3>
					<p>
						For more information or help regarding a certain subject move your mouse over the question mark.
					</p>
					<div class="table-responsive">
						<input type="hidden" name="insert_type" value="add">
						<table class="table" id="group.details" cellpadding="3">
							<tr>
								<td valign="top" width="35%">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Type the name of the mod you are adding."></i>
										Mod Name 
									</div>
								</td>
								<td>
									<div align="left">
										<input type="hidden" id="icon_hid" name="icon_hid" value="<?php echo $this->_tpl_vars['mod_icon']; ?>
">
										<input type="text" TABINDEX=1 class="form-control" id="name" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
									</div>
									<div id="name.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Type the name of this mods folder. For example, Counter-Strike: Source's mod folder is 'cstrike'"></i>
										Mod Folder 
									</div>
								</td>
								<td>
									<div align="left">
										<input type="text" TABINDEX=2 class="form-control" id="folder" name="folder" value="<?php echo $this->_tpl_vars['folder']; ?>
" />
									</div>
									<div id="folder.msg" class="badentry"></div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc"><i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="(STEAM_<b>X</b>:Y:Z) Some games display the steamid differently than others. Type the first number in the SteamID (<b>X</b>) depending on how it's rendered by this mod. (Default: 0)."></i>Steam Universe Number</div>
								</td>
								<td>
									<div align="left">
										<input type="text" TABINDEX=3 class="form-control" id="steam_universe" name="steam_universe" value="<?php echo $this->_tpl_vars['steam_universe']; ?>
" />
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Select if this mod is enabled and assignable to bans and servers."></i>Enabled
									</div>
								</td>
								<td>
									<div align="left">
										<div class="form-group d-flex justify-content-between">
											<div class="form-check form-check-flat mt-0" id="loginRememberMeDiv">
												<label class="form-check-label">
												<input id="loginRememberMe" type="checkbox" id="enabled" name="enabled" value="1" TABINDEX=4 vspace="5px" checked="checked" class="form-check-input" checked=""> &nbsp;
												<i class="input-helper"></i></label>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top" width="35%">
									<div class="rowdesc">
										<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Click here to upload an icon to associate with this mod."></i>Upload Icon
									</div>
								</td>
								<td>
									<div align="left">
										<?php echo smarty_function_sb_button(array('text' => 'Upload MOD Icon','onclick' => "childWindow=open('pages/admin.uploadicon.php','upload','resizable=yes,width=300,height=130');",'class' => "save btn-secondary",'id' => 'upload','submit' => false), $this);?>
 
									</div>
									<div id="icon.msg" class="badentry" style="display:block;">
										<?php if ($this->_tpl_vars['mod_icon']): ?>
										Uploaded: <b><?php echo $this->_tpl_vars['mod_icon']; ?>
</b>
										<?php endif; ?>
									</div>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>      
									<?php echo smarty_function_sb_button(array('text' => 'Save Changes','class' => 'ok','id' => 'editmod','submit' => true), $this);?>

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
</form>