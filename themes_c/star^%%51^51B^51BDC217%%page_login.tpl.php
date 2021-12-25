<?php /* Smarty version 2.6.31, created on 2021-12-23 13:24:51
         compiled from page_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_login.tpl', 29, false),)), $this); ?>
<div class="card">
	<div class="col-lg-4 mx-auto">
		<div class="auto-form-wrapper py-3 p-lg-4" id="login-content">
					<?php if ($this->_tpl_vars['steamlogin_show'] == 1): ?>
				<div class="form-group">
					<label class="label">Username</label>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Username" id="loginUsername" name="username">
						<div class="input-group-append">
							<span class="input-group-text">
							<i class="mdi mdi-check-circle-outline"></i>
							</span>
						</div>
					</div>
					<label id="loginUsername.msg" class="label"></label>
				</div>
				<div class="form-group">
					<label class="label">Password</label>
					<div class="input-group">
						<input type="password" class="form-control" id="loginPassword" name="password" placeholder="*********">
						<div class="input-group-append">
							<span class="input-group-text">
							<i class="mdi mdi-check-circle-outline"></i>
							</span>
						</div>
					</div>
					<label id="loginPassword.msg" class="label"></label>
				</div>
				<div class="form-group text-center"><?php echo smarty_function_sb_button(array('text' => 'Login','onclick' => $this->_tpl_vars['redir'],'class' => "btn btn-primary submit-btn btn-block",'id' => 'alogin','style' => "width: 100%; text-transform: uppercase;",'submit' => false), $this);?>

				</div>
				<div class="form-group d-flex justify-content-between">
					<div class="form-check" id="loginRememberMeDiv">
						<label class="form-check-label">
						<input id="loginRememberMe" type="checkbox" name="remember" value="checked" vspace="5px" class="form-check-input" checked=""> Keep me signed in
						<i class="input-helper"></i></label>
					</div>
					<a href="index.php?p=lostpassword" class="text-small forgot-password text-black">Forgot Password</a>
				</div>
				<?php endif; ?>
				<div class="form-group text-center">
					<a href="steamopenid.php"><img class="mr-3" src="themes/star/images/loginsteam.png" alt=""></a>
				</div>
		</div>
	</div>
</div>
<script>
	$E('html').onkeydown = function(event){
	    var event = new Event(event);
	    if (event.key == 'enter' ) <?php echo $this->_tpl_vars['redir']; ?>

	};$('loginRememberMeDiv').onkeydown = function(event){
	    var event = new Event(event);
	    if (event.key == 'space' ) $('loginRememberMeDiv').checked = true;
	};$('button').onkeydown = function(event){
	    var event = new Event(event);
	    if (event.key == 'space' ) <?php echo $this->_tpl_vars['redir']; ?>

	};
</script>