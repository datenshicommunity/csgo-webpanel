<?php /* Smarty version 2.6.31, created on 2021-12-21 17:29:05
         compiled from page_admin_mods_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'page_admin_mods_list.tpl', 27, false),array('modifier', 'escape', 'page_admin_mods_list.tpl', 37, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_listmods']): ?>
Access Denied!
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3>Server Mods <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total Mods:<?php echo $this->_tpl_vars['mod_count']; ?>
</i></h3>
				<div id="banlist" class="table-responsive">
					<table class="table table-striped tbl-sm">
						<thead>
							<tr>
								<th width="50%">Name</th>
								<th width="25%">Mod Folder</th>
								<th width="10%">
									<center>Mod icon</center>
								</th>
								<th width="2%"><span data-toggle="tooltip" data-placement="bottom" data-html="true" title="SteamID Universe <br>(X of STEAM_X:Y:Z)">SU</span></th>
								<?php if ($this->_tpl_vars['permission_editmods'] || $this->_tpl_vars['permission_deletemods']): ?>
								<th>Action</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $_from = ($this->_tpl_vars['mod_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gaben'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gaben']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mod']):
        $this->_foreach['gaben']['iteration']++;
?>
							<tr id="mid_<?php echo $this->_tpl_vars['mod']['mid']; ?>
">
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['mod']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['mod']['modfolder'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</td>
								<td align="center"><img src="themes/star/images/games/<?php echo $this->_tpl_vars['mod']['icon']; ?>
" class="img-ss"></td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['mod']['steam_universe'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</td>
								<?php if ($this->_tpl_vars['permission_editmods'] || $this->_tpl_vars['permission_deletemods']): ?>
								<td>
									<?php if ($this->_tpl_vars['permission_editmods']): ?>
									<a href="index.php?p=admin&c=mods&o=edit&id=<?php echo $this->_tpl_vars['mod']['mid']; ?>
" class="badge badge-primary"><i class="icon-sm mdi mdi-pencil"></i>Edit</a> - 
									<?php endif; ?>
									<?php if ($this->_tpl_vars['permission_deletemods']): ?>
									<a href="#" onclick="RemoveMod('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['mod']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
', '<?php echo $this->_tpl_vars['mod']['mid']; ?>
');"  class="badge badge-danger"><i class="icon-sm mdi mdi-delete"></i>Delete</a>
									<?php endif; ?>
								</td>
								<?php endif; ?>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>