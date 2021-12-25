<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:14
         compiled from page_servers.tpl */ ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="lead">Server List</h4>
				<div class="table-responsive" id="server_group">
					<?php if ($this->_tpl_vars['IN_SERVERS_PAGE'] && $this->_tpl_vars['access_bans']): ?>
					<div style="text-align:right; width:100%;"><span class="text-muted" style="font-size:12px;">Hint: Rightclick on a player to open a context menu with options to kick, ban or contact the player directly.</span></div>
					<?php endif; ?>
					<table class="table table-bordered table-striped table-hover tbl-sm">
						<thead>
							<tr>
								<th width="2%" height="16" class="listtable_top">MOD</th>
								<th width="2%" height="16" class="listtable_top">OS</th>
								<th width="2%" height="16" class="listtable_top">VAC</th>
								<th height="16" class="listtable_top" align="center">Hostname</th>
								<th width="10%" height="16" class="listtable_top">Players</th>
								<th width="10%" height="16" class="listtable_top">Map</th>
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['server_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['server']):
?>
							<tr style="cursor:pointer;" data-toggle="collapse" data-target="#expand_<?php echo $this->_tpl_vars['server']['sid']; ?>
" aria-expanded="<?php if ($_GET['s'] == $this->_tpl_vars['index'] && isset ( $_GET['s'] )): ?>true<?php else: ?>false<?php endif; ?>" aria-controls="collapseExample" <?php if (! $this->_tpl_vars['IN_SERVERS_PAGE']): ?> onclick="<?php echo $this->_tpl_vars['server']['evOnClick']; ?>
"<?php endif; ?>>
							<td height="16" align="center"><img src="themes/star/images/games/<?php echo $this->_tpl_vars['server']['icon']; ?>
" class="img-ss" /></td>
							<td height="16" align="center" id="os_<?php echo $this->_tpl_vars['server']['sid']; ?>
"></td>
							<td height="16" align="center" id="vac_<?php echo $this->_tpl_vars['server']['sid']; ?>
"></td>
							<td height="16" id="host_<?php echo $this->_tpl_vars['server']['sid']; ?>
"><i>Querying Server Data...</i></td>
							<td height="16" id="players_<?php echo $this->_tpl_vars['server']['sid']; ?>
">N/A</td>
							<td height="16" id="map_<?php echo $this->_tpl_vars['server']['sid']; ?>
">N/A</td>
							</tr>
							<?php if ($this->_tpl_vars['IN_SERVERS_PAGE']): ?>
							<tr>
								<td colspan="7" align="center" style="padding:0;">
									<div class="collapse <?php if ($this->_tpl_vars['index'] == $_GET['s'] && isset ( $_GET['s'] )): ?>show<?php endif; ?>" id="expand_<?php echo $this->_tpl_vars['server']['sid']; ?>
" data-parent="#server_group">
										<div id="sinfo_<?php echo $this->_tpl_vars['server']['sid']; ?>
">
											<table width="100%" border="0" class="table table-bordered table-striped table-hover">
												<tr>
													<td class="listtable_1" valign="top">
														<table width="100%" border="0" class="table table-sm table-bordered table-striped table-hover" id="playerlist_<?php echo $this->_tpl_vars['server']['sid']; ?>
" name="playerlist_<?php echo $this->_tpl_vars['server']['sid']; ?>
">
														</table>
													</td>
													<td width="355px" class="listtable_2 opener" valign="top" style="padding-right: 0px; padding-left: 13px; padding-top: 12px;">
														<img id="mapimg_<?php echo $this->_tpl_vars['server']['sid']; ?>
" style="border-radius: 6px; padding-left: 1px;width:340px !important;" src='images/maps/nomap.jpg'>
														<br />
														<br />
														<div align='center'>
															<p style="font-size: 13px;"><?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
</p>
															<input type='submit' onclick="document.location = 'steam://connect/<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
'" name='button' class='btn btn-success' style='margin:0px;' id='button' value='Join game' />
															<input type='button' onclick="ShowBox('Reloading..','<b>Refreshing the Serverdata...</b><br><i>Please Wait!</i>', 'blue', '', false);document.getElementById('dialog-control').setStyle('display', 'none');xajax_RefreshServer(<?php echo $this->_tpl_vars['server']['sid']; ?>
);" name='button' class='btn btn-warning' style='margin:0;' id='button' value='Refresh' />
														</div>
														<br />
													</td>
												</tr>
											</table>
										</div>
										<div id="noplayer_<?php echo $this->_tpl_vars['server']['sid']; ?>
" name="noplayer_<?php echo $this->_tpl_vars['server']['sid']; ?>
" style="display:none;">
											<br />
											<h2 style="color: #333;">No players in the server</h2>
											<br />
											<div align='center'>
												<p style="font-size: 13px;"><?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
</p>
												<input type='submit' onclick="document.location = 'steam://connect/<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
'" name='button' class='btn btn-success' style='margin:0;' id='button' value='Join game' />
												<input type='button' onclick="ShowBox('Reloading..','<b>Refreshing the Serverdata...</b><br><i>Please Wait!</i>', 'blue', '', false);document.getElementById('dialog-control').setStyle('display', 'none');xajax_RefreshServer(<?php echo $this->_tpl_vars['server']['sid']; ?>
);" name='button' class='btn btn-warning' style='margin:0;' id='button' value='Refresh' /><br /><br />
											</div>
										</div>
									</div>
								</td>
							</tr>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>