<?php /* Smarty version 2.6.31, created on 2021-12-21 17:49:12
         compiled from box_admin_admins_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'box_admin_admins_search.tpl', 140, false),)), $this); ?>
<div class="row">
	<div class="col-lg-6 mx-auto pt-3">
	
		<p class="text-center">
			<button class="btn btn-inverse-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="mdi mdi-magnify"></i>Advanced Search
			</button>
		</p>
		<div class="collapse box-shadow-delayed" id="collapseExample">
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="name_" value="name"> Nickname
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="nick" value="" onmouseup="$('name_').checked = true">
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="steam_" value="radiobutton"> Steam ID
					</label>
				</div>
				<div class="col-sm-9 row">
					<div class="col-sm-5">
						<input class="form-control" type="text" id="steamid" value="" onmouseup="$('steam_').checked = true">
					</div>
					<div class="col-sm-7">
						<select class="form-control" id="steam_match" onmouseup="$('steam_').checked = true">
							<option value="0" selected>Exact Match</option>
							<option value="1">Partial Match</option>
						</select>
					</div>
				</div>
			</div> 
			<?php if ($this->_tpl_vars['can_editadmin']): ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="admemail_" value="radiobutton"> E-Mail
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="admemail" value="" onmouseup="$('admemail_').checked = true">
				</div>
			</div>
			<?php endif; ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="webgroup_" value="radiobutton"> Web Group
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="webgroup" onmouseup="$('webgroup_').checked = true">
						<?php $_from = ($this->_tpl_vars['webgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['webgrp']):
?>
							<option label="<?php echo $this->_tpl_vars['webgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['webgrp']['gid']; ?>
"><?php echo $this->_tpl_vars['webgrp']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="srvadmgroup_" value="radiobutton"> Serveradmin Group
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="srvadmgroup" onmouseup="$('srvadmgroup_').checked = true">
						<?php $_from = ($this->_tpl_vars['srvadmgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srvadmgrp']):
?>
							<option label="<?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
"><?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="srvgroup_" value="radiobutton"> Server Group
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="srvgroup" onmouseup="$('srvgroup_').checked = true">
						<?php $_from = ($this->_tpl_vars['srvgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srvgrp']):
?>
							<option label="<?php echo $this->_tpl_vars['srvgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['srvgrp']['gid']; ?>
"><?php echo $this->_tpl_vars['srvgrp']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="admwebflags_" value="radiobutton"> Web Permissions
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control mb-2" id="admwebflag" name="admwebflag" onblur="getMultiple(this, 1);" size="5" multiple onmouseup="$('admwebflags_').checked = true">
						<?php $_from = ($this->_tpl_vars['admwebflag_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admwebflag']):
?>
							<option label="<?php echo $this->_tpl_vars['admwebflag']['name']; ?>
" value="<?php echo $this->_tpl_vars['admwebflag']['flag']; ?>
"><?php echo $this->_tpl_vars['admwebflag']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="admsrvflags_" value="radiobutton"> Server Permissions
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control mb-2" id="admwebflag" name="admsrvflag" onblur="getMultiple(this, 2);" size="5" multiple onmouseup="$('admsrvflags_').checked = true">
						<?php $_from = ($this->_tpl_vars['admsrvflag_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admsrvflag']):
?>
							<option label="<?php echo $this->_tpl_vars['admsrvflag']['name']; ?>
" value="<?php echo $this->_tpl_vars['admsrvflag']['flag']; ?>
"><?php echo $this->_tpl_vars['admsrvflag']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="admin_on_" value="radiobutton"> Server
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="server" onmouseup="$('admin_on_').checked = true">
						<option label="Web Ban" value="0">Web Ban</option>
						<?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
						<option value="<?php echo $this->_tpl_vars['server']['sid']; ?>
" id="ss<?php echo $this->_tpl_vars['server']['sid']; ?>
">Retrieving Hostname... (<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
)</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			
			<div class="row mx-5 pb-3">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-9">
					<?php echo smarty_function_sb_button(array('text' => 'Search','onclick' => "search_admins();",'class' => 'ok searchbtn','id' => 'searchbtn','submit' => false), $this);?>

				</div>
			</div>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['server_script']; ?>

<script>InitAccordion('tr.sea_open', 'div.panel', 'mainwrapper');</script>