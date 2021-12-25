<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from item_admin_tabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'item_admin_tabs.tpl', 12, false),)), $this); ?>
<div id="admin-page-menu">
<div align="center">
	<ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center">
		<li class="nav-item">
			<a class="nav-link active doublefix" href="#" id="adminlinkfix">
				<?php echo $this->_tpl_vars['pane_image']; ?>

			</a>
		</li>
	</ul><br>
	<ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center">
	<?php $_from = $this->_tpl_vars['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tab']):
?>
		<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tab']['tab'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<li", "<li class=\"nav-item\"") : smarty_modifier_replace($_tmp, "<li", "<li class=\"nav-item\"")))) ? $this->_run_mod_handler('replace', true, $_tmp, "<a", "<a class=\"nav-link\"") : smarty_modifier_replace($_tmp, "<a", "<a class=\"nav-link\"")))) ? $this->_run_mod_handler('replace', true, $_tmp, "tab-", "admin_tab-") : smarty_modifier_replace($_tmp, "tab-", "admin_tab-")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'admin_tab_', "tab-") : smarty_modifier_replace($_tmp, 'admin_tab_', "tab-")); ?>

	<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>
<br><br>
<?php echo '
<script type="text/javascript">
	var t="<i class=\\"menu-icon mdi mdi-";
	var e =document.getElementById("adminlinkfix").getElementsByTagName("img")[0];
	
	if(e.src.indexOf("admins")!=-1)
	{
		t+="account\\"></i>Admin Settings";
	}else if(e.src.indexOf("servers")!=-1)
	{
		t+="server\\"></i>Server Settings";
	}else if(e.src.indexOf("bans")!=-1)
	{
		t+="do-not-disturb\\"></i>Bans";
	}else if(e.src.indexOf("comms")!=-1)
	{
		t+="microphone-off\\"></i>Comms";
	}else if(e.src.indexOf("groups")!=-1)
	{
		t+="account-multiple\\"></i>Group Settings";
	}else if(e.src.indexOf("settings")!=-1)
	{
		t+="settings\\"></i>Webpanel Settings";
	}else if(e.src.indexOf("mods")!=-1)
	{
		t+="tune\\"></i>Manage Mods";
	}else if(e.src.indexOf("your_account")!=-1)
	{
		t+="account-card-details\\"></i>Your Account";
	}
	e.parentNode.innerHTML=t;
	
	//unknown double link fix
	if(document.getElementsByClassName("doublefix").length>1)
		document.getElementsByClassName("doublefix")[1].remove();
	
$(function () {
  $(\'[data-toggle="tooltip"]\').tooltip()
})
</script>
'; ?>