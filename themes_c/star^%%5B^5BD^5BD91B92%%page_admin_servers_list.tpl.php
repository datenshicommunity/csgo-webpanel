<?php /* Smarty version 2.6.31, created on 2021-12-25 15:02:53
         compiled from page_admin_servers_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_servers_list.tpl', 49, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_list']): ?>
Access Denied
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Servers <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total Servers:<?php echo $this->_tpl_vars['server_count']; ?>
</i></h3>
				<br><br>
				<div id="banlist" class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="3%">ID</th>
								<th width="54%">Hostname</th>
								<th width="6%">Players</th>
								<th width="5%">Mod</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
						<script>xajax_ServerHostPlayers(<?php echo $this->_tpl_vars['server']['sid']; ?>
);</script>
						<tr id="sid_<?php echo $this->_tpl_vars['server']['sid']; ?>
" <?php if ($this->_tpl_vars['server']['enabled'] == 0): ?>style="background-color:#eaeaea" title="Disabled"<?php endif; ?>>
						<td><?php echo $this->_tpl_vars['server']['sid']; ?>
</td>
						<td id="host_<?php echo $this->_tpl_vars['server']['sid']; ?>
"><i>Querying Server Data...</i></td>
						<td id="players_<?php echo $this->_tpl_vars['server']['sid']; ?>
">N/A</td>
						<td><img style="width:16px !important;height:16px !important;" src="images/games/<?php echo $this->_tpl_vars['server']['icon']; ?>
"></td>
						<td>
							<?php if ($this->_tpl_vars['server']['rcon_access']): ?>
							<a href="index.php?p=admin&c=servers&o=rcon&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">RCON</a> -
							<?php endif; ?>
							<a href="index.php?p=admin&c=servers&o=admincheck&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">Admins</a>
							<?php if ($this->_tpl_vars['permission_editserver']): ?>
							- <a href="index.php?p=admin&c=servers&o=edit&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">Edit</a>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pemission_delserver']): ?>
							- <a href="#" onclick="RemoveServer(<?php echo $this->_tpl_vars['server']['sid']; ?>
, '<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
');">Delete</a>
							<?php endif; ?>
						</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
				<?php if ($this->_tpl_vars['permission_addserver']): ?>
				<br />
				<div class="rowdesc">
					<i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Click here to upload a screenshot of a map. Use the mapname as filename."></i>
					Upload Map Image
					<?php echo smarty_function_sb_button(array('text' => 'Upload Map Image','onclick' => "childWindow=open('pages/admin.uploadmapimg.php','upload','resizable=yes,width=300,height=130');",'class' => "btn-primary",'id' => 'upload'), $this);?>

				</div>
				<div id="mapimg.msg" style="color:#CC0000;"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>