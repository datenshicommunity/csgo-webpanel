<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:14
         compiled from page_dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'page_dashboard.tpl', 19, false),array('modifier', 'escape', 'page_dashboard.tpl', 132, false),array('modifier', 'count_characters', 'page_dashboard.tpl', 220, false),array('function', 'math', 'page_dashboard.tpl', 146, false),)), $this); ?>
<div class="row purchace-popup">
	<div class="col-12">
		<span class="d-block d-md-flex align-items-center">
		<?php echo $this->_tpl_vars['dashboard_text']; ?>

		<i class="mdi mdi-close popup-dismiss ml-auto d-none d-md-block"></i>
		</span>
	</div>
</div>
<div class="grid-margin">
	<div class="card card-statistics">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 card-col">
				<div class="card-statistics">
					<div class="card-body">
						<div class="clearfix">
							<i class="mdi float-left mdi-server text-danger icon-lg" data-aos="zoom-in" data-aos-delay="100"></i>
							<p class="mb-0 text-right" data-aos="flip-left" data-aos-delay="300">Total Servers</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0 timer count-number" data-aos="zoom-in" data-aos-delay="50" data-to="<?php echo count($this->_tpl_vars['server_list']); ?>
" data-speed="1500"></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 card-col">
				<div class="card-statistics">
					<div class="card-body">
						<div class="clearfix">
							<i class="mdi float-left mdi-block-helper text-warning icon-lg" data-aos="zoom-in" data-aos-delay="300"></i>
							<p class="mb-0 text-right" data-aos="flip-left" data-aos-delay="500">Total Bans</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0 timer count-number" data-aos="zoom-in" data-aos-delay="250" data-to="<?php echo $this->_tpl_vars['total_bans']; ?>
" data-speed="1500"></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 card-col">
				<div class="card-statistics">
					<div class="card-body">
						<div class="clearfix">
							<i class="mdi float-left mdi-microphone-off text-info icon-lg" data-aos="zoom-in" data-aos-delay="500"></i>
							<p class="mb-0 text-right" data-aos="flip-left" data-aos-delay="700">Total Comm Blocks</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0 timer count-number" data-aos="zoom-in" data-aos-delay="450" data-to="<?php echo $this->_tpl_vars['total_comms']; ?>
" data-speed="1500"></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 card-col">
				<div class="card-statistics">
					<div class="card-body">
						<div class="clearfix">
							<i class="mdi float-left mdi-minus-circle text-success icon-lg" data-aos="zoom-in" data-aos-delay="700"></i>
							<p class="mb-0 text-right" data-aos="flip-left" data-aos-delay="900">Total Stopped Connections</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0 timer count-number" data-aos="zoom-in" data-aos-delay="650" data-to="<?php echo $this->_tpl_vars['total_blocked']; ?>
" data-speed="1500"></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="front-servers" data-aos="zoom-out" data-aos-delay="50">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_servers.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin" data-aos="fade-out"  data-aos-delay="150">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title" style="margin-bottom:0px;">Latest Added Bans</h4>
				<p class="card-description">
					<code>Total bans:<?php echo $this->_tpl_vars['total_bans']; ?>
</code>
				</p>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover tbl-sm">
						<thead>
							<tr>
								<th width="100px">
									MOD
								</th>
								<th width="120px">
									Date/Time
								</th>
								<th width="14%">
									Length
								</th>
								<th>
									Name
								</th>
								<th width="200px">
									Remaining Time
								</th>
							</tr>
						</thead>
						<tbody>
							<?php  include("./themes/star/progress.php"); ?>
							<?php $_from = $this->_tpl_vars['players_banned']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['player']):
?>
								
							<tr onclick="<?php echo $this->_tpl_vars['player']['link_url']; ?>
" style="cursor:pointer;" data-aos="zoom-in">
								<td class="font-weight-medium text-center">
									<?php if ($this->_tpl_vars['player']['icon'] == "web.png"): ?>
									<i class="icon-md mdi mdi-earth"></i>
									<?php else: ?>
									<img src="themes/star/images/games/<?php echo $this->_tpl_vars['player']['icon']; ?>
" class="img-ss" alt="MOD" title="MOD" />
									<?php endif; ?>
								</td>
								<td>
									<?php echo $this->_tpl_vars['player']['created']; ?>

								</td>
								<td>
									<?php if ($this->_tpl_vars['player']['unbanned']): ?>
										<?php if ($this->_tpl_vars['player']['ub_reason'] == 'U'): ?>
											<label class="badge badge-primary">
										<?php elseif ($this->_tpl_vars['player']['ub_reason'] == 'E' || $this->_tpl_vars['player']['ub_reason'] == 'D'): ?>
											<label class="badge badge-success">
										<?php endif; ?>
									<?php elseif ($this->_tpl_vars['player']['length'] == 'Permanent'): ?>
										<label class="badge badge-danger">
									<?php else: ?>
										<label class="badge badge-warning">
									<?php endif; ?>
									<?php echo $this->_tpl_vars['player']['length']; ?>
<?php if ($this->_tpl_vars['player']['unbanned']): ?> (<?php echo $this->_tpl_vars['player']['ub_reason']; ?>
)<?php endif; ?></label>
								</td>
								<td>
									<?php if (empty ( $this->_tpl_vars['player']['short_name'] )): ?>
										<i class="text-muted">no nickname present</i>
									<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['player']['short_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

									<?php endif; ?>
								</td>
								<td class="text-danger">
									<div class="progress">
										<?php if ($this->_tpl_vars['player']['unbanned']): ?>
											<?php if ($this->_tpl_vars['player']['ub_reason'] == 'U'): ?>
												<div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
											<?php elseif ($this->_tpl_vars['player']['ub_reason'] == 'E' || $this->_tpl_vars['player']['ub_reason'] == 'D'): ?>
												<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
											<?php endif; ?>
										<?php elseif ($this->_tpl_vars['player']['length'] == 'Permanent'): ?>
											<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
										<?php else: ?>
											<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-width="<?php echo smarty_function_math(array('equation' => "( n - c ) / ( ( e - c ) / 100 )",'e' => $this->_tpl_vars['ban_times'][$this->_tpl_vars['index']]['e'],'c' => $this->_tpl_vars['ban_times'][$this->_tpl_vars['index']]['c'],'n' => time()), $this);?>
">
										<?php endif; ?>
											</div>
									</div>
								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-lg-6 grid-margin" data-aos="fade-out" data-aos-delay="250">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title" style="margin-bottom:0px;">Latest Comm Blocks</h4>
				<p class="card-description">
					<code>Total blocks: <?php echo $this->_tpl_vars['total_comms']; ?>
</code>
				</p>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover tbl-sm">
						<thead>
							<tr>
								<th width="100px">
									&nbsp;
								</th>
								<th width="120px">
									Date/Time
								</th>
								<th>
									Name
								</th>
								<th width="130px">
									Length
								</th>
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['players_commed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['player']):
?>
							<tr onclick="<?php echo $this->_tpl_vars['player']['link_url']; ?>
" style="cursor:pointer;" height="16" data-aos="zoom-in">
								<td> 
									<?php if ($this->_tpl_vars['player']['type'] == "images/type_v.png"): ?>
									<i class="icon-md mdi mdi-microphone-off"></i>
									<?php else: ?>
									<i class="icon-md mdi mdi-pencil-off"></i>
									<?php endif; ?>
								</td>
								<td>
									<?php echo $this->_tpl_vars['player']['created']; ?>

								</td>
								<td>
									<?php if (empty ( $this->_tpl_vars['player']['short_name'] )): ?>
									<i>no nickname present</i>
									<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['player']['short_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

									<?php endif; ?>
								</td>
								<td>
									<?php if ($this->_tpl_vars['player']['length'] == 'Permanent'): ?>
									<label class="badge badge-danger">
									<?php elseif ($this->_tpl_vars['player']['unbanned']): ?>
									<?php if ($this->_tpl_vars['player']['ub_reason'] == 'U'): ?>
									<label class="badge badge-primary">
									<?php elseif ($this->_tpl_vars['player']['ub_reason'] == 'E'): ?>
									<label class="badge badge-success">
									<?php elseif ($this->_tpl_vars['player']['ub_reason'] == 'D'): ?>
									<label class="badge badge-success">
									<?php endif; ?>
									<?php else: ?>
									<label class="badge badge-warning">
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['player']['length'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) > 0): ?><?php echo $this->_tpl_vars['player']['length']; ?>
<?php else: ?>Session<?php endif; ?><?php if ($this->_tpl_vars['player']['unbanned']): ?> (<?php echo $this->_tpl_vars['player']['ub_reason']; ?>
)<?php endif; ?></label>
								</td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 grid-margin" data-aos="fade-out" id="test" data-aos-delay="550">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title" style="margin-bottom:0px;">Latest Players Blocked</h4>
				<p class="card-description">
					<code>Total Stopped: <?php echo $this->_tpl_vars['total_blocked']; ?>
</code>
				</p>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover tbl-sm">
						<thead>
							<tr>
								<th width="100px">
									&nbsp;
								</th>
								<th>
									Date/Time
								</th>
								<th width="120px">
									Name
								</th>
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['players_blocked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['player']):
?>
							<tr<?php if ($this->_tpl_vars['dashboard_lognopopup']): ?> onclick="<?php echo $this->_tpl_vars['player']['link_url']; ?>
"<?php else: ?> onclick="<?php echo $this->_tpl_vars['player']['popup']; ?>
" <?php endif; ?> style="cursor: pointer;" id="<?php echo $this->_tpl_vars['player']['server']; ?>
" title="Querying Server Data..." data-aos="zoom-in">
							<td>
								<i class="icon-md mdi mdi-minus-circle"></i>
							</td>
							<td>
								<?php echo $this->_tpl_vars['player']['date']; ?>

							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['player']['short_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

							</td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>