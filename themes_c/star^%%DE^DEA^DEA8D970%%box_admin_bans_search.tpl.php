<?php /* Smarty version 2.6.31, created on 2021-12-21 16:21:48
         compiled from box_admin_bans_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'box_admin_bans_search.tpl', 202, false),)), $this); ?>
<div class="row">
	<div class="col-lg-6 mx-auto pt-3">
		<p class="text-center">
			<button class="btn btn-inverse-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="mdi mdi-magnify"></i>Advanced Search
			</button>
		</p>
		<?php echo '
		<style>
			div input.form-control{margin-top: 8px;}
			div select.form-control{margin-top: 5px;}
		</style>
		'; ?>

		<div class="collapse box-shadow-delayed" id="collapseExample">
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="name" value="name"> Nickname
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="nick" value="" onmouseup="$('name').checked = true">
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
			<?php if (! $this->_tpl_vars['hideplayerips']): ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="ip_" value="radiobutton"> IP
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="ip_" value="" onmouseup="$('ip_').checked = true">
				</div>
			</div>
			<?php endif; ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="reason_" value="radiobutton"> Reason
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="ban_reason" value="" onmouseup="$('reason_').checked = true">
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="date" value="radiobutton"> Date
					</label>
				</div>
				<div class="col-sm-9 row">
					<div class="col-sm-4"><input class="form-control" type="text" id="day" placeholder="DD" maxlength="2" onmouseup="$('date').checked = true"></div>
					<div class="col-sm-4"><input class="form-control" type="text" id="month" placeholder="MM" maxlength="2" onmouseup="$('date').checked = true"></div>
					<div class="col-sm-4"><input class="form-control" type="text" id="year" placeholder="YY" maxlength="4" onmouseup="$('date').checked = true"></div>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="length_" value="radiobutton"> Length
					</label>
				</div>
				<div class="col-sm-9 row">
					<div class="col-sm-2">
						<select class="form-control" id="length_type" onmouseup="$('length_').checked = true">
							<option value="e" selected title="equal to">=</option>
							<option value="h" title="greater">&gt;</option>
							<option value="l" title="smaller">&lt;</option>
							<option value="eh" title="equal to or greater">&gt;=</option>
							<option value="el" title="equal to or smaller">&lt;=</option>
						</select>
					</div>
					<div class="col-sm-10 row">
						<div class="col-7">
							<select class="form-control" id="length" onmouseup="$('length_').checked = true" onchange="switch_length(this);$('length').setStyle('width', '210px');" onmouseover="if(this.options[this.selectedIndex].value=='other')$('length').setStyle('width', '210px');if(this.options[this.selectedIndex].value=='other')this.focus();" style="width:210px">
								<option value="0">Permanent</option>
								<optgroup label="minutes">
									<option value="1">1 minute</option>
									<option value="5">5 minutes</option>
									<option value="10">10 minutes</option>
									<option value="15">15 minutes</option>
									<option value="30">30 minutes</option>
									<option value="45">45 minutes</option>
								</optgroup>
								<optgroup label="hours">
									<option value="60">1 hour</option>
									<option value="120">2 hours</option>
									<option value="180">3 hours</option>
									<option value="240">4 hours</option>
									<option value="480">8 hours</option>
									<option value="720">12 hours</option>
								</optgroup>
								<optgroup label="days">
									<option value="1440">1 day</option>
									<option value="2880">2 days</option>
									<option value="4320">3 days</option>
									<option value="5760">4 days</option>
									<option value="7200">5 days</option>
									<option value="8640">6 days</option>
								</optgroup>
								<optgroup label="weeks">
									<option value="10080">1 week</option>
									<option value="20160">2 weeks</option>
									<option value="30240">3 weeks</option>
								</optgroup>
								<optgroup label="months">
									<option value="40320">1 month</option>
									<option value="80640">2 months</option>
									<option value="120960">3 months</option>
									<option value="241920">6 months</option>
									<option value="483840">12 months</option>
								</optgroup>
								<option value="other">Other length in minutes</option>
							</select>
						</div>
						<div class="col-5">
							<input type="text" class="form-control" id="other_length" name="other_length" onmouseup="$('length_').checked = true" style="display:none;">
						</div>
					</div>
				</div>
			</div>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="ban_type_" value="radiobutton"> Type
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="ban_type" onmouseup="$('ban_type_').checked = true">
						<option value="0" selected>Steam ID</option>
						<option value="1">IP Address</option>
					</select>
				</div>
			</div>
			<?php if (! $this->_tpl_vars['hideadminname']): ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="admin" value="radiobutton"> Admin
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="ban_admin" onmouseup="$('admin').checked = true">
						<?php $_from = ($this->_tpl_vars['admin_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
						<option label="<?php echo $this->_tpl_vars['admin']['user']; ?>
" value="<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><?php echo $this->_tpl_vars['admin']['user']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<?php endif; ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="where_banned" value="radiobutton"> Server
					</label>
				</div>
				<div class="col-sm-9">
					<select class="form-control" id="server" onmouseup="$('where_banned').checked = true">
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
			<?php if ($this->_tpl_vars['is_admin']): ?>
			<div class="row mx-5">
				<div class="form-radio col-sm-3">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="search_type" id="comment_" value="radiobutton"> Comment
					</label>
				</div>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="ban_comment" value="" onmouseup="$('comment_').checked = true">
				</div>
			</div>
			<?php endif; ?>
			<div class="row mx-5 pb-3">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-9">
					<?php echo smarty_function_sb_button(array('text' => 'Search','onclick' => "search_bans();",'class' => 'ok searchbtn','id' => 'searchbtn','submit' => false), $this);?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->_tpl_vars['server_script']; ?>