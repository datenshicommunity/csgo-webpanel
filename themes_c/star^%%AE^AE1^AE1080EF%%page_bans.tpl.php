<?php /* Smarty version 2.6.31, created on 2021-12-21 16:21:48
         compiled from page_bans.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_bans.tpl', 31, false),array('function', 'math', 'page_bans.tpl', 186, false),array('modifier', 'htmlspecialchars', 'page_bans.tpl', 66, false),array('modifier', 'replace', 'page_bans.tpl', 73, false),array('modifier', 'escape', 'page_bans.tpl', 139, false),array('modifier', 'stripslashes', 'page_bans.tpl', 139, false),array('modifier', 'count', 'page_bans.tpl', 147, false),array('modifier', 'strpos', 'page_bans.tpl', 164, false),)), $this); ?>
<?php if ($this->_tpl_vars['comment']): ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h3 class="lead"><?php echo $this->_tpl_vars['commenttype']; ?>
 Comment</h3>
				<table id="group.details" class="table">
					<tr>
						<td valign="top">
							<div class="rowdesc"><i class="text-primary mdi mdi-help-circle" data-toggle="tooltip" data-placement="bottom" title="Type the text you would like to say."></i> Comment</div>
						</td>
					</tr>
					<tr>
						<td>
							<div align="left">
								<textarea rows="10" cols="60" class="submit-fields form-control" style="width:500px;" id="commenttext" name="commenttext"><?php echo $this->_tpl_vars['commenttext']; ?>
</textarea>
							</div>
							<div id="commenttext.msg" class="badentry"></div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="bid" id="bid" value="<?php echo $this->_tpl_vars['comment']; ?>
">
							<input type="hidden" name="ctype" id="ctype" value="<?php echo $this->_tpl_vars['ctype']; ?>
">
							<?php if ($this->_tpl_vars['cid'] != ""): ?>
							<input type="hidden" name="cid" id="cid" value="<?php echo $this->_tpl_vars['cid']; ?>
">
							<?php else: ?>
							<input type="hidden" name="cid" id="cid" value="-1">
							<?php endif; ?>
							<input type="hidden" name="page" id="page" value="<?php echo $this->_tpl_vars['page']; ?>
">
							<?php echo smarty_function_sb_button(array('text' => ($this->_tpl_vars['commenttype'])." Comment",'onclick' => "ProcessComment();",'class' => 'ok','id' => 'acom','submit' => false), $this);?>
&nbsp;
							<?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aback'), $this);?>

						</td>
					</tr>
					<?php $_from = ($this->_tpl_vars['othercomments']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['com']):
?>
					<tr>
						<td>
							<b><?php echo $this->_tpl_vars['com']['comname']; ?>
</b>
						</td>
						<td align="right"><b><?php echo $this->_tpl_vars['com']['added']; ?>
</b>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<?php echo $this->_tpl_vars['com']['commenttxt']; ?>

						</td>
					</tr>
					<?php if ($this->_tpl_vars['com']['editname'] != ''): ?>
					<tr>
						<td colspan='3'>
							<span style='font-size:6pt;color:grey;'>last edit <?php echo $this->_tpl_vars['com']['edittime']; ?>
 by <?php echo $this->_tpl_vars['com']['editname']; ?>
</span>
						</td>
					</tr>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="lead">Banlist Overview <a class="btn btn-outline-primary btn-rounded btn-fw" style="width:20px;height:20px;padding:0px;line-height:18px;" href="index.php?p=banlist&hideinactive=<?php if ($this->_tpl_vars['hidetext'] == 'Hide'): ?>true<?php else: ?>false<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['searchlink'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['hidetext']; ?>
 Inactive"><?php echo $this->_tpl_vars['hidetext']; ?>
 Inactive</a></h4>
				<p>Total Bans: <?php echo $this->_tpl_vars['total_bans']; ?>
</p>
				<?php  require (TEMPLATES_PATH . "/admin.bans.search.php"); ?>
				<?php  $pageName="bans"; include("./themes/star/progressBansComms.php"); ?>
				<div id="banlist" class="table-responsive">
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_nav'])) ? $this->_run_mod_handler('replace', true, $_tmp, '|', '') : smarty_modifier_replace($_tmp, '|', '')); ?>
  <?php if ($this->_tpl_vars['view_bans']): ?> 
							<button type="button" class="btn btn-outline-primary btn-rounded btn-fw" style="height:24px;padding: 2px 10px; min-width:85px;" 
								onclick="_TickSelectAll();return false;" title="Select All" name="tickswitchlink2" id="tickswitchlink2">Select All</button>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['general_unban'] || $this->_tpl_vars['can_delete']): ?>
							<select name="bulk_action" id="bulk_action" onchange="BulkEdit(this,'<?php echo $this->_tpl_vars['admin_postkey']; ?>
');" class="btn btn-outline-primary btn-rounded btn-fw"
								style="min-width: auto; height: 24px; padding: 0px 12px;">
								<option value="-1">Action</option>
								<?php if ($this->_tpl_vars['general_unban']): ?>
								<option value="U">Unban</option>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['can_delete']): ?>
								<option value="D">Delete</option>
								<?php endif; ?>
							</select>
							<?php endif; ?>
						</div>
					</div>
					<table class="table table-hover tbl-sm">
						<thead>
							<tr>
								<?php if ($this->_tpl_vars['view_bans']): ?>
								<th>
									<div class="ok" style="display:none;height:16px;width:16px;cursor:pointer;" title="Select All" name="tickswitch" id="tickswitch" onclick="_TickSelectAll()"></div>
									<button type="button" class="btn btn-icons btn-outline-primary" onclick="_TickSelectAll()" style="width:20px;height:20px;padding:0px;">
									<i class="mdi mdi-select-all"></i>
									</button>
								</th>
								<?php endif; ?>
								<th width="12%" class="text-center">MOD/Country</th>
								<th width="14%" class="text-center">Date</th>
								<th>Player</th>
								<?php if (! $this->_tpl_vars['hideadminname']): ?>
								<th width="15%">Admin</th>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['list_progress']): ?>
								<th width="10%" class="text-right">Length</th>
								<th width="200px" class="text-center">Remaining Progress</th>
								<?php else: ?>
								<th width="10%" class="text-center">Length</th>
								<?php endif; ?>
							</tr>
						</thead>
						<?php $_from = $this->_tpl_vars['ban_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['banlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['banlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['ban']):
        $this->_foreach['banlist']['iteration']++;
?>
						<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_<?php echo $this->_tpl_vars['ban']['ban_id']; ?>
" aria-expanded="false" aria-controls="collapseExample"
						<?php if ($this->_tpl_vars['ban']['server_id'] != 0): ?>
						onclick="xajax_ServerHostPlayers(<?php echo $this->_tpl_vars['ban']['server_id']; ?>
, 'id', 'host_<?php echo $this->_tpl_vars['ban']['ban_id']; ?>
');"
						<?php endif; ?>
						>
						<?php if ($this->_tpl_vars['view_bans']): ?>
						<td width="20px">
							<div class="form-check" onclick="PreventClose(event);">
								<label class="form-check-label pl-0">
								<input id="chkb_<?php echo ($this->_foreach['banlist']['iteration']-1); ?>
" type="checkbox" name="chkb_<?php echo ($this->_foreach['banlist']['iteration']-1); ?>
" value="<?php echo $this->_tpl_vars['ban']['ban_id']; ?>
" vspace="5px" class="form-check-input"> &nbsp;
								<i class="input-helper"></i></label>
							</div>

						</td>
						<?php endif; ?>
						<td align="center" class="img-ss"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ban']['mod_icon'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'images', 'themes/star/images') : smarty_modifier_replace($_tmp, 'images', 'themes/star/images')))) ? $this->_run_mod_handler('replace', true, $_tmp, 'jpg', 'png') : smarty_modifier_replace($_tmp, 'jpg', 'png')); ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban']['ban_date']; ?>
</td>
						<td>
							<div style="float:left;">
								<?php if (empty ( $this->_tpl_vars['ban']['player'] )): ?>
								<i><font color="#677882">no nickname present</font></i>
								<?php else: ?>
								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ban']['player'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

								<?php endif; ?>
							</div>
							<?php if ($this->_tpl_vars['ban']['demo_available']): ?>
							<div style="float:right;">
								<i class="icon-sm mdi mdi-lambda"></i>
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['view_comments'] && $this->_tpl_vars['ban']['commentdata'] != 'None' && count($this->_tpl_vars['ban']['commentdata']) > 0): ?>
							<div style="float:right;">
								<?php echo count($this->_tpl_vars['ban']['commentdata']); ?>
 <i class="mdi mdi-comment-text"></i>
							</div>
							<?php endif; ?>
						</td>
						<?php if (! $this->_tpl_vars['hideadminname']): ?>
						<td>
							<?php if (! empty ( $this->_tpl_vars['ban']['admin'] )): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['ban']['admin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

							<?php else: ?>
							<i><font color="#677882">Admin deleted</font></i>
							<?php endif; ?>
						</td>
						<?php endif; ?>

						<td <?php if ($this->_tpl_vars['list_progress']): ?> align="right" <?php else: ?> align="center" <?php endif; ?> class="<?php echo $this->_tpl_vars['ban']['class']; ?>
">
							<?php if (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Unbanned') : strpos($_tmp, 'Unbanned')) !== false): ?>
								<label class="badge badge-primary">
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Expired') : strpos($_tmp, 'Expired')) !== false || ((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Deleted') : strpos($_tmp, 'Deleted')) !== false || ((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Expired') : strpos($_tmp, 'Expired')) !== false): ?>
								<label class="badge badge-success">
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Permanent') : strpos($_tmp, 'Permanent')) !== false): ?>
								<label class="badge badge-danger">
							<?php else: ?>
								<label class="badge badge-warning">
							<?php endif; ?>
							<?php echo $this->_tpl_vars['ban']['banlength']; ?>
</label>
						</td>
						<?php if ($this->_tpl_vars['list_progress']): ?>
						<td class="text-danger">

							<div class="progress">
								<?php if (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Unbanned') : strpos($_tmp, 'Unbanned')) !== false): ?>
									<div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Expired') : strpos($_tmp, 'Expired')) !== false || ((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Deleted') : strpos($_tmp, 'Deleted')) !== false || ((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Expired') : strpos($_tmp, 'Expired')) !== false): ?>
									<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['ban']['banlength'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'Permanent') : strpos($_tmp, 'Permanent')) !== false): ?>
									<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-width="100"></div>
								<?php else: ?>
									<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-width="<?php echo smarty_function_math(array('equation' => "( n - c ) / ( ( e - c ) / 100 )",'e' => $this->_tpl_vars['ban_times'][$this->_tpl_vars['index']]['e'],'c' => $this->_tpl_vars['ban_times'][$this->_tpl_vars['index']]['c'],'n' => time()), $this);?>
">
								<?php endif; ?>
									</div>
							</div>
						</td>
						<?php endif; ?>
						</tr>
						<!-- ###############[ Start Sliding Panel ]################## -->
						<tr>
							<td colspan="7" align="center" style="padding:0;">
								<div class="collapse" id="expand_<?php echo $this->_tpl_vars['ban']['ban_id']; ?>
" data-parent="#banlist">
									<table class="table tbl-sm" width="100%">
										<tr>
											<td align="left" class="listtable_top" colspan="3">
												<b>Ban Details</b>
											</td>
										</tr>
										<tr align="left">
											<td width="30%" >Player</td>
											<td >
												<?php if (empty ( $this->_tpl_vars['ban']['player'] )): ?>
												<i><font color="#677882">no nickname present</font></i>
												<?php else: ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ban']['player'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

												<?php endif; ?>
											</td>
											<!-- ###############[ Start Admin Controls ]################## -->
											<?php if ($this->_tpl_vars['view_bans']): ?>
											<td width="30%" rowspan="<?php if ($this->_tpl_vars['ban']['unbanned']): ?>15<?php else: ?>13<?php endif; ?>" class="listtable_2 opener">
												<div class="ban-edit">
													<?php echo '
													<style>
														.list-arrow > li > a > img { width:16px; height:16px;}
														.imgfix > a > img { width:16px; height:16px;}
													</style>
													'; ?>

													<ul class="list-arrow" id="fix_banlinks">
														<?php if ($this->_tpl_vars['ban']['unbanned'] && $this->_tpl_vars['ban']['reban_link'] != false): ?>
														<li><?php echo $this->_tpl_vars['ban']['reban_link']; ?>
</li>
														<?php endif; ?>
														<li><?php echo $this->_tpl_vars['ban']['blockcomm_link']; ?>
</li>
														<li><?php echo $this->_tpl_vars['ban']['demo_link']; ?>
</li>
														<li><?php echo $this->_tpl_vars['ban']['addcomment']; ?>
</li>
														<?php if ($this->_tpl_vars['ban']['type'] == 0): ?>
														<?php if ($this->_tpl_vars['groupban']): ?>
														<li><?php echo $this->_tpl_vars['ban']['groups_link']; ?>
</li>
														<?php endif; ?>
														<?php if ($this->_tpl_vars['friendsban']): ?>
														<li><?php echo $this->_tpl_vars['ban']['friend_ban_link']; ?>
</li>
														<?php endif; ?>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['ban']['view_edit'] && ! $this->_tpl_vars['ban']['unbanned'] )): ?>
														<li><?php echo $this->_tpl_vars['ban']['edit_link']; ?>
</li>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['ban']['unbanned'] == false && $this->_tpl_vars['ban']['view_unban'] )): ?>
														<li><?php echo $this->_tpl_vars['ban']['unban_link']; ?>
</li>
														<?php endif; ?>
														<?php if ($this->_tpl_vars['ban']['view_delete']): ?>
														<li><?php echo $this->_tpl_vars['ban']['delete_link']; ?>
</li>
														<?php endif; ?>
													</ul>
												</div>
											</td>
											<?php else: ?>
											<td width="30%" rowspan="<?php if ($this->_tpl_vars['ban']['unbanned']): ?>13<?php else: ?>11<?php endif; ?>" class="listtable_2 opener">
												<div class="ban-edit">
													<ul>
														<li><?php echo $this->_tpl_vars['ban']['demo_link']; ?>
</li>
													</ul>
												</div>
											</td>
											<?php endif; ?>
											<!-- ###############[ End Admin Controls ]##################### -->
										</tr>
										<tr align="left">
											<td width="20%" >Steam ID</td>
											<td >
												<?php if (empty ( $this->_tpl_vars['ban']['steamid'] )): ?>
												<i><font color="#677882">No Steam ID present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['ban']['steamid']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Steam3 ID</td>
											<td >
												<?php if (empty ( $this->_tpl_vars['ban']['steamid'] )): ?>
												<i><font color="#677882">No Steam3 ID present</font></i>
												<?php else: ?>
												<a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban']['steamid3']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ban']['steamid3']; ?>
</a>
												<?php endif; ?>
											</td>
										</tr>
										<?php if ($this->_tpl_vars['ban']['type'] == 0): ?>
										<tr align="left">
											<td width="20%" >Steam Community</td>
											<td ><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban']['communityid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ban']['communityid']; ?>
</a></td>
										</tr>
										<?php endif; ?>
										<?php if (! $this->_tpl_vars['hideplayerips']): ?>
										<tr align="left">
											<td width="20%" >IP address</td>
											<td >
												<?php if ($this->_tpl_vars['ban']['ip'] == 'none'): ?>
												<i><font color="#677882">no IP address present</font></i>
												<?php else: ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ban']['ip'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'images', 'themes/star/images') : smarty_modifier_replace($_tmp, 'images', 'themes/star/images')))) ? $this->_run_mod_handler('replace', true, $_tmp, 'jpg', 'png') : smarty_modifier_replace($_tmp, 'jpg', 'png')))) ? $this->_run_mod_handler('replace', true, $_tmp, 'alt=', 'class="img-ss" alt=') : smarty_modifier_replace($_tmp, 'alt=', 'class="img-ss" alt=')); ?>

												<?php endif; ?>
											</td>
										</tr>
										<?php endif; ?>
										<tr align="left">
											<td width="20%" >Invoked on</td>
											<td ><?php echo $this->_tpl_vars['ban']['ban_date']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Banlength</td>
											<td ><?php echo $this->_tpl_vars['ban']['banlength']; ?>
</td>
										</tr>
										<?php if ($this->_tpl_vars['ban']['unbanned']): ?>
										<tr align="left">
											<td width="20%" >Unban reason</td>
											<td >
												<?php if ($this->_tpl_vars['ban']['ureason'] == ""): ?>
												<i><font color="#677882">no reason present</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['ban']['ureason']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Unbanned by Admin</td>
											<td >
												<?php if (! empty ( $this->_tpl_vars['ban']['removedby'] )): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['ban']['removedby'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

												<?php else: ?>
												<i><font color="#677882">Admin deleted.</font></i>
												<?php endif; ?>
											</td>
										</tr>
										<?php endif; ?>
										<tr align="left">
											<td width="20%" >Expires on</td>
											<td >
												<?php if ($this->_tpl_vars['ban']['expires'] == 'never'): ?>
												<i><font color="#677882">Not applicable.</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['ban']['expires']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Reason</td>
											<td ><?php echo ((is_array($_tmp=$this->_tpl_vars['ban']['reason'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
										</tr>
										<?php if (! $this->_tpl_vars['hideadminname']): ?>
										<tr align="left">
											<td width="20%" >Banned by Admin</td>
											<td >
												<?php if (! empty ( $this->_tpl_vars['ban']['admin'] )): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['ban']['admin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

												<?php else: ?>
												<i><font color="#677882">Admin deleted.</font></i>
												<?php endif; ?>
											</td>
										</tr>
										<?php endif; ?>
										<tr align="left">
											<td width="20%" >Banned from</td>
											<td  <?php if ($this->_tpl_vars['ban']['server_id'] != 0): ?> id="host_<?php echo $this->_tpl_vars['ban']['ban_id']; ?>
"<?php endif; ?>>
											<?php if ($this->_tpl_vars['ban']['server_id'] == 0): ?>
											Web Ban
											<?php else: ?>
											Please Wait...
											<?php endif; ?>
											</td>
										</tr>
										<tr align="left">
											<td width="20%" >Total Bans</td>
											<td ><?php echo $this->_tpl_vars['ban']['prevoff_link']; ?>
</td>
										</tr>
										<tr align="left">
											<td width="20%" >Blocked (<?php echo $this->_tpl_vars['ban']['blockcount']; ?>
)</td>
											<td >
												<?php if ($this->_tpl_vars['ban']['banlog'] == ""): ?>
												<i><font color="#677882">never</font></i>
												<?php else: ?>
												<?php echo $this->_tpl_vars['ban']['banlog']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<?php if ($this->_tpl_vars['view_comments']): ?>
										<tr align="left">
											<td width="20%" >Comments</td>
											<td  colspan="2">
												<?php if ($this->_tpl_vars['ban']['commentdata'] != 'None'): ?>
												<table width="100%" border="0">
													<?php $_from = $this->_tpl_vars['ban']['commentdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['commenta']):
?>
													<?php if ($this->_tpl_vars['commenta']['morecom']): ?>
													<tr>
														<td colspan='3'>
															<hr>
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
														<td align="right">
															<b><?php echo $this->_tpl_vars['commenta']['added']; ?>
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
														<td colspan='3'>
															<?php echo $this->_tpl_vars['commenta']['commenttxt']; ?>

														</td>
													</tr>
													<?php if (! empty ( $this->_tpl_vars['commenta']['edittime'] )): ?>
													<tr>
														<td colspan='3'>
															<span style="font-size:6pt;color:grey;">last edit <?php echo $this->_tpl_vars['commenta']['edittime']; ?>
 by <?php if (! empty ( $this->_tpl_vars['commenta']['editname'] )): ?><?php echo $this->_tpl_vars['commenta']['editname']; ?>
<?php else: ?><i><font color="#677882">Admin deleted</font></i><?php endif; ?></span>
														</td>
													</tr>
													<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
												</table>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['ban']['commentdata'] == 'None'): ?>
												<?php echo $this->_tpl_vars['ban']['commentdata']; ?>

												<?php endif; ?>
											</td>
										</tr>
										<?php endif; ?>
									</table>
								</div>
							</td>
						</tr>
						<!-- ###############[ End Sliding Panel ]################## -->
						<?php endforeach; endif; unset($_from); ?>
					</table>
					<div class="col-12 my-2 text-xl-right text-lg-left">
						<div id="banlist-nav" class="btn btn-inverse-light  btn-rounded btn-fw p-1 p-md-2 p-xl-2">
							<?php echo $this->_tpl_vars['ban_nav']; ?>
  <?php if ($this->_tpl_vars['view_bans']): ?> | 
							<button type="button" class="btn btn-outline-primary btn-rounded btn-fw" style="height:24px;padding: 2px 10px; min-width:85px;" 
								onclick="_TickSelectAll();return false;" title="Select All" name="tickswitchlink" id="tickswitchlink">Select All</button>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['general_unban'] || $this->_tpl_vars['can_delete']): ?>
							<select name="bulk_action" id="bulk_action" onchange="BulkEdit(this,'<?php echo $this->_tpl_vars['admin_postkey']; ?>
');" class="btn btn-outline-primary btn-rounded btn-fw"
								style="min-width: auto; height: 24px; padding: 0px 12px;">
								<option value="-1">Action</option>
								<?php if ($this->_tpl_vars['general_unban']): ?>
								<option value="U">Unban</option>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['can_delete']): ?>
								<option value="D">Delete</option>
								<?php endif; ?>
							</select>
							<?php endif; ?>
						</div>
					</div>
					<?php if ($this->_tpl_vars['can_export']): ?>
					<div class="col-12 py-2 text-center no-wrap">
						<a href="./exportbans.php?type=steam" title="Export Permanent SteamID Bans" class="btn btn-inverse-primary btn-rounded btn-fw">Export Permanent SteamID Bans</a>&nbsp;&nbsp;|&nbsp;
						<a href="./exportbans.php?type=ip" title="Export Permanent IP Bans"class="btn btn-inverse-primary btn-rounded btn-fw">Export Permanent IP Bans</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '
<script type="text/javascript">
	window.addEvent(\'domready\', function(){
		InitAccordion(\'tr.opener\', \'div.opener\', \'mainwrapper\');
		'; ?>

		<?php if ($this->_tpl_vars['view_bans']): ?>
		$('tickswitch').value=0;
		<?php endif; ?>
		<?php echo '
		});
		
</script>
'; ?>

<?php endif; ?>