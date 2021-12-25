<?php /* Smarty version 2.6.31, created on 2021-12-25 14:59:47
         compiled from page_admin_bans_submissions_archiv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'page_admin_bans_submissions_archiv.tpl', 34, false),array('modifier', 'stripquotes', 'page_admin_bans_submissions_archiv.tpl', 34, false),array('modifier', 'escape', 'page_admin_bans_submissions_archiv.tpl', 145, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permissions_submissions']): ?>
Access Denied!
<?php else: ?>
<div id="appeala" class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body" id="add-group1">
				<h3>Ban Submissions Archive <i class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;">Total Archive:<?php echo $this->_tpl_vars['submission_count_archiv']; ?>
</i></h3>
				<p>Click a player's nickname to view information about their submission</p>
				<br /><br />
				<div class="table-responsive">
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['asubmission_nav']; ?>

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
						<?php $_from = ($this->_tpl_vars['submission_list_archiv']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_appeala_<?php echo $this->_tpl_vars['sub']['subid']; ?>
" aria-expanded="false" aria-controls="collapseExample"
						<?php if ($this->_tpl_vars['sub']['hostname'] == ""): ?>onclick="xajax_ServerHostPlayers('<?php echo $this->_tpl_vars['sub']['server']; ?>
', 'id', 'suba<?php echo $this->_tpl_vars['sub']['subid']; ?>
');"<?php endif; ?>>
						<td style="border-bottom: solid 1px #ccc" height='16'><?php echo $this->_tpl_vars['sub']['name']; ?>
</td>
						<td style="border-bottom: solid 1px #ccc" height='16'><?php if ($this->_tpl_vars['sub']['SteamId'] != ""): ?><?php echo $this->_tpl_vars['sub']['SteamId']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sub']['sip']; ?>
<?php endif; ?></td>
						<td style="border-bottom: solid 1px #ccc" height='16'>
							<?php if ($this->_tpl_vars['sub']['archiv'] != '2' && $this->_tpl_vars['sub']['archiv'] != '3'): ?>
							<a href="#" onclick="xajax_SetupBan(<?php echo $this->_tpl_vars['sub']['subid']; ?>
);">Ban</a> -
							<?php if ($this->_tpl_vars['permissions_editsub']): ?>
							<a href="#" onclick="RemoveSubmission(<?php echo $this->_tpl_vars['sub']['subid']; ?>
, '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sub']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('stripquotes', true, $_tmp) : stripquotes($_tmp)); ?>
', '2');">Restore</a> -
							<?php endif; ?>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['permissions_editsub']): ?>
							<a href="#" onclick="RemoveSubmission(<?php echo $this->_tpl_vars['sub']['subid']; ?>
, '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sub']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('stripquotes', true, $_tmp) : stripquotes($_tmp)); ?>
', '0');">Delete</a> -
							<?php endif; ?>
							<a href="index.php?p=admin&c=bans&o=email&type=s&id=<?php echo $this->_tpl_vars['sub']['subid']; ?>
">Contact</a>
						</td>
						</tr>
						<tr id="asid_<?php echo $this->_tpl_vars['sub']['subid']; ?>
a">
							<td style="padding:0;" colspan="3">
								<div class="collapse" id="expand_appeala_<?php echo $this->_tpl_vars['sub']['subid']; ?>
" data-parent="#appeala">
									<table class="table tbl-sm" width="100%">
										<tr>
											<td height="16" align="left" class="listtable_top" colspan="3">
												<b>Ban Details</b>            
											</td>
										</tr>
										<tr align="left">
											<td height="16" align="left" class="listtable_1" colspan="2">
												<b>Archived because <?php echo $this->_tpl_vars['sub']['archive']; ?>
</b>
											</td>
											<td width="30%" rowspan="11" class="listtable_2">
												<div class="ban-edit">
													<ul class="list-arrow" id="fix_banlinks">
														<li><?php echo $this->_tpl_vars['sub']['demo']; ?>
</li>
														<li><?php echo $this->_tpl_vars['sub']['subaddcomment']; ?>
</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Player</td>
											<td height="16" class="listtable_1"><?php echo $this->_tpl_vars['sub']['name']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Submitted</td>
											<td height="16" class="listtable_1"><?php echo $this->_tpl_vars['sub']['submitted']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">SteamID</td>
											<td height="16" class="listtable_1">
												<?php if ($this->_tpl_vars['sub']['SteamId'] == ""): ?>
												<i><font color="#677882">no steamid present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['sub']['SteamId']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">IP</td>
											<td height="16" class="listtable_1">
												<?php if ($this->_tpl_vars['sub']['sip'] == ""): ?>
												<i><font color="#677882">no ip address present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['sub']['sip']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Reason</td>
											<td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['reason']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Server</td>
											<td height="" class="listtable_1" id="suba<?php echo $this->_tpl_vars['sub']['subid']; ?>
"><?php if ($this->_tpl_vars['sub']['hostname'] == ""): ?><i>Retrieving Hostname</i><?php else: ?><?php echo $this->_tpl_vars['sub']['hostname']; ?>
<?php endif; ?></td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">MOD</td>
											<td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['mod']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Submitter Name</td>
											<td height="" class="listtable_1">
												<?php if ($this->_tpl_vars['sub']['subname'] == ""): ?>
												<i><font color="#677882">no name present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['sub']['subname']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Submitter IP</td>
											<td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['ip']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Archived by</td>
											<td height="" class="listtable_1">
												<?php if (! empty ( $this->_tpl_vars['sub']['archivedby'] )): ?>
												<?php echo $this->_tpl_vars['sub']['archivedby']; ?>

												<?php else: ?>
												<i><font color="#677882">Admin deleted.</font></i>
												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" height="16" class="listtable_1">Comments</td>
											<td height="60" class="listtable_1" colspan="3">
												<?php if ($this->_tpl_vars['sub']['commentdata'] != 'None'): ?>
												<table width="100%" border="0">
													<?php $_from = $this->_tpl_vars['sub']['commentdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
												<?php if ($this->_tpl_vars['sub']['commentdata'] == 'None'): ?>
												<?php echo $this->_tpl_vars['sub']['commentdata']; ?>

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
							<?php echo $this->_tpl_vars['asubmission_nav']; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>InitAccordion('tr.opener4', 'div.opener4', 'mainwrapper');</script>
<?php endif; ?>