<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:12
         compiled from page_admin.tpl */ ?>
<h3 class="title text-center">Please select an option to administer</h3>
<ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center">
	<?php if ($this->_tpl_vars['access_admins']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=admins">
			<i class="menu-icon mdi mdi-account"></i> Admin Settings
		</a>
	</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['access_servers']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=servers">
			<i class="menu-icon mdi mdi-server"></i> Server Settings
		</a>
	</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['access_bans']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=bans">
			<i class="menu-icon mdi mdi-do-not-disturb"></i> Bans
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=comms">
			<i class="menu-icon mdi mdi-microphone-off"></i> Comms
		</a>
	</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['access_groups']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=groups">
			<i class="menu-icon mdi mdi-account-multiple"></i> Group Settings
		</a>
	</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['access_settings']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=settings">
			<i class="menu-icon mdi mdi-settings"></i> Webpanel Settings
		</a>
	</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['access_mods']): ?>
	<li class="nav-item">
		<a class="nav-link" href="index.php?p=admin&amp;c=mods">
			<i class="menu-icon mdi mdi-tune"></i> Manage Mods
		</a>
	</li>
	<?php endif; ?>
</ul>
<br>
<div class="row">
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-3 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
				<p class="text-muted mb-2">Version Information</p>
				<div class="d-flex align-items-center">
					<h1 class="font-weight-medium mb-2" id='relver'>Please Wait...</h1>
					<h5 class="font-weight-medium text-success ml-2">Latest Release <?php if ($this->_tpl_vars['dev']): ?> and Latest Git: <span id='svnrev'>Please Wait...</span><?php endif; ?></h5>
				</div>
				<div class="d-flex align-items-center">
					<div class="bg-success dot-indicator"></div>
					<p class="text-muted mb-0 ml-2" id='versionmsg'>Please Wait...</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-3 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-primary"></div>
				<p class="text-muted mb-2">Admin Information</p>
				<div class="d-flex align-items-center">
					<h1 class="font-weight-medium mb-2 timer count-number" data-to="<?php echo $this->_tpl_vars['total_admins']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-primary ml-2">Total Admins</h5>
				</div>
				<div class="d-flex align-items-center">
					<i class="menu-icon mdi mdi-marker-check text-primary"></i>
					<p class="text-muted mb-0 ml-2">Teamwork makes the <span class="text-primary">dream work</span>!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-3 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-warning"></div>
				<p class="text-muted mb-2">Server Information</p>
				<div class="d-flex align-items-center">
					<h1 class="font-weight-medium mb-2 timer count-number" data-to="<?php echo $this->_tpl_vars['total_servers']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-warning ml-2">Total Servers</h5>
				</div>
				<div class="d-flex align-items-center">
					<i class="menu-icon mdi mdi-marker-check text-warning"></i>
					<p class="text-muted mb-0 ml-2">When you feel like <span class="text-warning">quitting</span> think about why you <span class="text-warning">started</span>!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-0 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
				<p class="text-muted mb-2 pl-0 pt-0 pl-lg-3 pt-lg-3 pl-xl-0 pt-xl-0">Ban Information</p>
				<div class="d-none d-md-flex align-items-top">
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number mb-0" data-to="<?php echo $this->_tpl_vars['total_bans']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-danger">Total Bans</h5>
					</div>
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number ml-sm-0 mb-0" data-to="<?php echo $this->_tpl_vars['total_blocks']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-danger">Connections Blocked</h5>
					</div>
				</div>
				<div class="d-flex d-md-none align-items-center">
					<h1 class="font-weight-medium mb-2 timer count-number" data-to="<?php echo $this->_tpl_vars['total_bans']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-danger ml-2">Total Bans</h5>
					<h5 class="font-weight-medium mb-2 mx-1 d-none d-sm-flex"> and </h5>
					<h1 class="font-weight-medium mb-2 timer count-number ml-2 ml-sm-0" data-to="<?php echo $this->_tpl_vars['total_blocks']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-danger ml-2">Connections Blocked</h5>
				</div>
				<div class="d-flex align-items-center">
					<div class="bg-success dot-indicator"></div>
					<p class="text-muted mb-2 pl-0 pb-0 pl-lg-3 pb-lg-3 pl-xl-0 pb-xl-0">Total demo size: <span class="text-danger"><?php echo $this->_tpl_vars['demosize']; ?>
</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-0 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-info"></div>
				<p class="text-muted mb-2 pl-0 pt-0 pl-lg-3 pt-lg-3 pl-xl-0 pt-xl-0">Protest Information</p>
				<div class="d-none d-md-flex align-items-top">
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number mb-0" data-to="<?php echo $this->_tpl_vars['total_protests']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-info">Pending Protests</h5>
					</div>
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number ml-sm-0 mb-0" data-to="<?php echo $this->_tpl_vars['archived_protests']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-info">Archived Protests</h5>
					</div>
				</div>
				<div class="d-flex d-md-none align-items-center">
					<h1 class="font-weight-medium mb-2 timer count-number" data-to="<?php echo $this->_tpl_vars['total_protests']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-info ml-2">Pending</h5>
					<h5 class="font-weight-medium mb-2 mx-1 d-none d-sm-flex"> and </h5>
					<h1 class="font-weight-medium mb-2 timer count-number ml-2 ml-sm-0" data-to="<?php echo $this->_tpl_vars['archived_protests']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-info ml-2">Archived Protests</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card" style="cursor:pointer;">
		<div class="card aligner-wrapper">
			<div class="card-body p-2 p-md-2 p-lg-0 p-xl-4">
				<div class="absolute left top bottom h-100 v-strock-2 bg-dark"></div>
				<p class="text-muted mb-2 pl-0 pt-0 pl-lg-3 pt-lg-3 pl-xl-0 pt-xl-0">Submission Information</p>
				<div class="d-none d-md-flex align-items-top">
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number mb-0" data-to="<?php echo $this->_tpl_vars['total_submissions']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-dark">Pending Submissions</h5>
					</div>
					<div class="d-block text-center w-50">
						<h1 class="font-weight-medium timer count-number ml-sm-0 mb-0" data-to="<?php echo $this->_tpl_vars['archived_submissions']; ?>
" data-speed="1500"></h1>
						<h5 class="font-weight-medium text-dark">Archived Submissions</h5>
					</div>
				</div>
				<div class="d-flex d-md-none align-items-center">
					<h1 class="font-weight-medium mb-2 timer count-number" data-to="<?php echo $this->_tpl_vars['total_submissions']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-dark ml-2">Pending</h5>
					<h5 class="font-weight-medium mb-2 mx-1 d-none d-sm-flex"> and </h5>
					<h1 class="font-weight-medium mb-2 timer count-number ml-2 ml-sm-0" data-to="<?php echo $this->_tpl_vars['archived_submissions']; ?>
" data-speed="1500"></h1>
					<h5 class="font-weight-medium text-dark ml-2">Archived Submissions</h5>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
xajax_CheckVersion();
</script>