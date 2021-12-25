<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from page_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'page_header.tpl', 27, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php if ($this->_tpl_vars['header_title'] != ""): ?><?php echo $this->_tpl_vars['header_title']; ?>
<?php else: ?>SourceBans<?php endif; ?></title>
		<link rel="Shortcut Icon" href="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/images/favicon.ico" />
		<link rel="stylesheet" href="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/css/materialdesign/css/materialdesignicons.min.css">
		<script type="text/javascript" src="./scripts/sourcebans.js"></script>
		<link href="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/css/style.css" rel="stylesheet" type="text/css" />
		<script src="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/js/jqueryBase.js"></script>
	<link rel="stylesheet" href="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/css/aos.css" />
	<script src="themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/js/aos.js"></script>
		<script type="text/javascript" src="./scripts/mootools.js"></script>
		<script type="text/javascript" src="./scripts/contextMenoo.js"></script>
		<?php echo $this->_tpl_vars['tiny_mce_js']; ?>

		<?php echo $this->_tpl_vars['xajax_functions']; ?>

	</head>
	<body onload="NavListFix()">
		<div class="container-scroller">
			<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
					<a class="navbar-brand brand-logo" href="index.php">
					<img src="images/<?php echo $this->_tpl_vars['header_logo']; ?>
" alt="SourceBans Logo" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="index.php">
					<img src="images/<?php echo ((is_array($_tmp=$this->_tpl_vars['header_logo'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', '-mini.') : smarty_modifier_replace($_tmp, '.', '-mini.')); ?>
" alt="SourceBans Logo" onError="this.onerror=null;this.src='themes/star/images/sb-large-mini.png';" />
					</a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center">
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item dropdown">
							<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
							<i class="mdi mdi-magnify"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
								<form method="get" action="index.php" id="banform">
									<input type="hidden" name="p" value="banlist" />
									<a class="dropdown-item">
										<p class="mb-0 font-weight-normal float-left">Search Bans...
										</p>
									</a>
									<a class="dropdown-item preview-item">
										<div class="preview-thumbnail" onclick="document.getElementById('banform').submit();" style="cursor:pointer;">
											<div class="preview-icon bg-danger">
												<i class="mdi mdi-do-not-disturb mx-0"></i>
											</div>
										</div>
										<div class="preview-item-content">
											<input type="text" name="searchText" class="form-control" placeholder="Search Bans..." style="width:190px;">
										</div>
									</a>
								</form>
								<div class="dropdown-divider"></div>
								<form method="get" action="index.php" id="commform">
									<input type="hidden" name="p" value="commslist" />
									<a class="dropdown-item">
										<p class="mb-0 font-weight-normal float-left">Search Comms...
										</p>
									</a>
									<a class="dropdown-item preview-item">
										<div class="preview-thumbnail" onclick="document.getElementById('commform').submit();" style="cursor:pointer;">
											<div class="preview-icon bg-info">
												<i class="mdi mdi-microphone-off mx-0"></i>
											</div>
										</div>
										<div class="preview-item-content">
											<input type="text" name="searchText" class="form-control" placeholder="Search Comms..." style="width:190px;">
										</div>
									</a>
								</form>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						<?php if ($this->_tpl_vars['logged_in']): ?>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<span class="profile-text d-none d-xl-inline-block">Hello, <?php echo $this->_tpl_vars['username']; ?>
 !</span>
							<img class="img-xs rounded-circle" src='<?php  include("./themes/star/photoGET.php"); ?>' alt="profile image">
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
								<a class="dropdown-item p-0">
									<div class="d-flex border-bottom">
										<div class="py-3 px-4 d-flex align-items-center justify-content-center">
											<i class="mdi mdi-settings mr-0 text-gray"></i>
										</div>
										<div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
											<i class="mdi mdi-account-outline mr-0 text-gray"></i>
										</div>
										<div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
											<i class="mdi mdi-lock-outline mr-0 text-gray"></i>
										</div>
										<div class="py-3 px-4 d-flex align-items-center justify-content-center">
											<i class="mdi mdi-logout mr-0 text-gray"></i>
										</div>
									</div>
								</a>
								<a class="dropdown-item mt-2" href="index.php?p=admin">
								Admin Panel
								</a>
								<a class="dropdown-item" href="index.php?p=account">
								Manage Account
								</a>
								<a class="dropdown-item" href="index.php?p=account#^1" onclick="SwapPane(1);">
								Change Password
								</a>
								<a class="dropdown-item" href="index.php?p=logout">
								Sign Out
								</a>
							</div>
						</li>
						<?php else: ?>
							<?php  include("./themes/star/photoNULL.php"); ?>
						<?php endif; ?>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
		</div>
		<div class="container-fluid page-body-wrapper">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav" id="js_fixme">
		<li class="nav-item nav-profile">
			<div class="nav-link">
				<?php if ($this->_tpl_vars['logged_in']): ?>
				<div class="user-wrapper">
					<div class="profile-image">
						
						<img src='<?php  include("./themes/star/photoGET.php"); ?>' alt="profile image">
					</div>
					<div class="text-wrapper">
						<a class="profile-name" href="index.php?p=account"><?php echo $this->_tpl_vars['username']; ?>
</a>
						<div class="mt-2">
							<small class="designation text-muted"><a href='index.php?p=logout'>Logout</a></small>
						</div>
					</div>
				</div>
				<?php else: ?>
				<button onclick="location.href='index.php?p=login';" class="btn btn-success btn-block">Login
				</button>
				<?php endif; ?>
			</div>
		</li>