<?php /* Smarty version 2.6.31, created on 2021-12-25 14:59:47
         compiled from page_admin_bans_protests.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'page_admin_bans_protests.tpl', 135, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_protests']): ?>
Access Denied!
<?php else: ?>
<div id="protests" class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body" id="add-group1">
				<h3>Ban Protests <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total Protests:<?php echo $this->_tpl_vars['protest_count']; ?>
</i></h3>
				<p>Click a player's nickname to view information about their ban</p>
				<br /><br />
				<div class="table-responsive">
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['protest_nav']; ?>

						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Nickname</th>
								<th>SteamID</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $_from = ($this->_tpl_vars['protest_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['protest']):
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_protest_<?php echo $this->_tpl_vars['protest']['pid']; ?>
" aria-expanded="false" aria-controls="collapseExample">
							<td><a href="./index.php?p=banlist&advSearch=<?php echo $this->_tpl_vars['protest']['authid']; ?>
&advType=steamid" title="Show ban"><?php echo $this->_tpl_vars['protest']['name']; ?>
</a></td>
							<td><?php if ($this->_tpl_vars['protest']['authid'] != ""): ?><?php echo $this->_tpl_vars['protest']['authid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['protest']['ip']; ?>
<?php endif; ?></td>
							<td>
								<?php if ($this->_tpl_vars['permission_editban']): ?>
								<a href="#" onclick="RemoveProtest('<?php echo $this->_tpl_vars['protest']['pid']; ?>
', '<?php if ($this->_tpl_vars['protest']['authid'] != ""): ?><?php echo $this->_tpl_vars['protest']['authid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['protest']['ip']; ?>
<?php endif; ?>', '1');">Remove</a> -
								<?php endif; ?>
								<a href="index.php?p=admin&c=bans&o=email&type=p&id=<?php echo $this->_tpl_vars['protest']['pid']; ?>
">Contact</a>
							</td>
						</tr>
						<tr id="pid_<?php echo $this->_tpl_vars['protest']['pid']; ?>
a" >
							<td id="ban_details_<?php echo $this->_tpl_vars['protest']['pid']; ?>
" style="padding:0;" colspan="3">
								<div class="collapse" id="expand_protest_<?php echo $this->_tpl_vars['protest']['pid']; ?>
" data-parent="#protests">
									<table class="table tbl-sm" width="100%">
										<tr>
											<td height="16" align="left" class="listtable_top" colspan="3">
												<b>Bandetails</b>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Player</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['name']; ?>
</td>
											<td width="30%" rowspan="11" class="listtable_2">
												<div class="ban-edit">
													<?php echo '
													<style>
														.list-arrow > li > a > img { width:16px; height:16px;}
													</style>
													'; ?>

													<ul class="list-arrow"  id="fix_banlinks">
														<li><?php echo $this->_tpl_vars['protest']['protaddcomment']; ?>
</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">SteamID</td>
											<td height="16">
												<?php if ($this->_tpl_vars['protest']['authid'] == ""): ?>
												<i><font color="#677882">no steamid present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['protest']['authid']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">IP address</td>
											<td height="16">
												<?php if ($this->_tpl_vars['protest']['ip'] == 'none' || $this->_tpl_vars['protest']['ip'] == ''): ?>
												<i><font color="#677882">no IP address present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['protest']['ip']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Invoked on</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['date']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">End Date</td>
											<td height="16">
												<?php if ($this->_tpl_vars['protest']['ends'] == 'never'): ?>
												<i><font color="#677882">Not applicable.</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['protest']['ends']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Reason</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['ban_reason']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Banned by Admin</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['admin']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Banned from</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['server']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Protester IP</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['pip']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Protested on</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['datesubmitted']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Protest message</td>
											<td height="16"><?php echo $this->_tpl_vars['protest']['reason']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16">Comments</td>
											<td height="60" colspan="3">
												<?php if ($this->_tpl_vars['protest']['commentdata'] != 'None'): ?>
												<table width="100%" border="0">
													<?php $_from = $this->_tpl_vars['protest']['commentdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['commenta']):
?>
													<?php if ($this->_tpl_vars['commenta']['morecom']): ?>
													<tr>
														<td colspan="3">
															<hr />
														</td>
													</tr>
													<?php endif; ?>
													<tr>
														<td>
															<?php if (! empty ( $this->_tpl_vars['commenta']['comname'] )): ?>
															<b><?php echo ((is_array($_tmp=$this->_tpl_vars['commenta']['comname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</b>
															<?php else: ?>
															<i><font color="#677882">Admin deleted</font></i>
															<?php endif; ?>
														</td>
														<td align="right"><b><?php echo $this->_tpl_vars['commenta']['added']; ?>
</b>
														</td>
														<?php if ($this->_tpl_vars['commenta']['editcomlink'] != ""): ?>
														<td align="right" class="imgfix linkfix">
															<?php echo $this->_tpl_vars['commenta']['editcomlink']; ?>
 <?php echo $this->_tpl_vars['commenta']['delcomlink']; ?>

														</td>
														<?php endif; ?>
													</tr>
													<tr>
														<td colspan="2" style="word-break: break-all;word-wrap: break-word;">
															<?php echo $this->_tpl_vars['commenta']['commenttxt']; ?>

														</td>
													</tr>
													<?php if (! empty ( $this->_tpl_vars['commenta']['edittime'] )): ?>
													<tr>
														<td colspan="3">
															<span style="font-size:6pt;color:grey;">last edit <?php echo $this->_tpl_vars['commenta']['edittime']; ?>
 by <?php if (! empty ( $this->_tpl_vars['commenta']['editname'] )): ?><?php echo $this->_tpl_vars['commenta']['editname']; ?>
<?php else: ?><i><font color="#677882">Admin deleted</font></i><?php endif; ?></span>
														</td>
													</tr>
													<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
												</table>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['protest']['commentdata'] == 'None'): ?>
												<?php echo $this->_tpl_vars['protest']['commentdata']; ?>

												<?php endif; ?>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['protest_nav']; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>InitAccordion('tr.opener2', 'div.opener2', 'protests');</script>
<?php endif; ?>