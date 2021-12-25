<?php /* Smarty version 2.6.31, created on 2021-12-21 17:49:12
         compiled from page_admin_overrides.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'page_admin_overrides.tpl', 38, false),array('function', 'sb_button', 'page_admin_overrides.tpl', 56, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_addadmin']): ?>
Access Denied!
<?php else: ?>
<?php if ($this->_tpl_vars['overrides_error'] != ""): ?>
<script type="text/javascript">ShowBox("Error", "<?php echo $this->_tpl_vars['overrides_error']; ?>
", "red");</script>
<?php endif; ?>
<?php if ($this->_tpl_vars['overrides_save_success']): ?>
<script type="text/javascript">ShowBox("Overrides updated", "The changes have been saved successfully.", "green", "index.php?p=admin&c=admins");</script>
<?php endif; ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body" id="add-group">
				<form action="" method="post">
					<h3>Overrides</h3>
					<p>With Overrides you can change the flags or permissions on any command, either globally, or for a specific group, without editing plugin source code.<br />
						<i>Read about <b><a href="http://wiki.alliedmods.net/Overriding_Command_Access_%28SourceMod%29" title="Overriding Command Access (SourceMod)" target="_blank">overriding command access</a></b> in the AlliedModders Wiki!</i><br /><br />
					</p>
					Blanking out an overrides' name will delete it.<br /><br />
					<div id="banlist" class="table-responsive">
						<table class="table table-striped" id="overrides">
							<thead>
								<tr>
									<th>Type</th>
									<th>Name</th>
									<th>Flags</th>
								</tr>
							</thead>
							<?php $_from = $this->_tpl_vars['overrides_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['override']):
?>
							<tr>
								<td class="tablerow1">
									<select name="override_type[]" class="form-control">
									<option<?php if ($this->_tpl_vars['override']['type'] == 'command'): ?> selected="selected"<?php endif; ?> value="command">Command</option>
									<option<?php if ($this->_tpl_vars['override']['type'] == 'group'): ?> selected="selected"<?php endif; ?> value="group">Group</option>
									</select>
									<input type="hidden" name="override_id[]" value="<?php echo $this->_tpl_vars['override']['id']; ?>
" />
								</td>
								<td class="tablerow1"><input class="form-control" name="override_name[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['override']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" /></td>
								<td class="tablerow1"><input class="form-control" name="override_flags[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['override']['flags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" /></td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
							<tr>
								<td class="tablerow1">
									<select class="form-control" name="new_override_type">
										<option value="command">Command</option>
										<option value="group">Group</option>
									</select>
								</td>
								<td class="tablerow1"><input class="form-control" name="new_override_name" /></td>
								<td class="tablerow1"><input class="form-control" name="new_override_flags" /></td>
							</tr>
						</table>
					</div>
					<br />
					<center>
						<?php echo smarty_function_sb_button(array('text' => 'Save','class' => 'ok','id' => 'oversave','submit' => true), $this);?>

						<?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'oback'), $this);?>

					</center>
				</form>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>