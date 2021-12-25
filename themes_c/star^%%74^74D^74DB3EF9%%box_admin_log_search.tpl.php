<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from box_admin_log_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'box_admin_log_search.tpl', 72, false),)), $this); ?>
<div class="row">
	<div class="col-lg-6 mx-auto pt-3">
		<p class="text-center">
			<button class="btn btn-inverse-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="mdi mdi-magnify"></i>Advanced Search
			</button>
		</p>
		
		<div class="collapse table-responsive box-shadow-delayed py-3 px-2" id="collapseExample">
	  		<table style="width:90%;" class="table table-noborder table-sm m-auto">
			    <tr>
					<td width="8%" align="center">
					<div class="form-radio">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="search_type" id="admin_" value="radiobutton"> Admin
						</label>
					</div>
			        <td width="66%">
						<select class="form-control" id="admin" onmouseup="$('admin_').checked = true" style="width: 100%;">
							<?php $_from = ($this->_tpl_vars['admin_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
								<option label="<?php echo $this->_tpl_vars['admin']['user']; ?>
" value="<?php echo $this->_tpl_vars['admin']['aid']; ?>
"><?php echo $this->_tpl_vars['admin']['user']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>    
					</td>
				</tr>
				 <tr>
					<td align="center">
					<div class="form-radio">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="search_type" id="message_" value="radiobutton"> Message
						</label>
					</div>
					</td>
			        <td><input class="form-control" type="text" id="message" value="" onmouseup="$('message_').checked = true" style="width:  100%;"></td>
				</tr>
			    <tr>
			        <td align="center">
					<div class="form-radio">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="search_type" id="date_" value="radiobutton"> Date
						</label>
					</div>
					</td>
				    <td>
			        	<input class="form-control" style="display:inline-block;width:45px;" type="text" id="day" placeholder="DD" onmouseup="$('date_').checked = true" maxlength="2"> .
						<input class="form-control" style="display:inline-block;width:45px;" type="text" id="month" placeholder="MM" onmouseup="$('date_').checked = true" maxlength="2"> .
						<input class="form-control" style="display:inline-block;width:60px;" type="text" id="year" placeholder="YYYY" onmouseup="$('date_').checked = true" maxlength="4">&nbsp;
						<input class="form-control" style="display:inline-block;width:45px;" type="text" id="fhour" placeholder="00" onmouseup="$('date_').checked = true" maxlength="2"> :
						<input class="form-control" style="display:inline-block;width:45px;" type="text" id="fminute" placeholder="00" onmouseup="$('date_').checked = true" maxlength="2" >-&nbsp;
						<input class="form-control" style="display:inline-block;width:45px;" type="text" id="thour" placeholder="23" onmouseup="$('date_').checked = true" maxlength="2"> :
						<input class="form-control" style="display:inline-block;width:45px;" type="text" id="tminute" placeholder="59" onmouseup="$('date_').checked = true" maxlength="2">
			        </td>
			    </tr>
			    <tr>
			        <td align="center">
					<div class="form-radio">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="search_type" id="type_" value="radiobutton"> Type
						</label>
					</div>
					</td>
			        <td>
						<select class="form-control" id="type" onmouseup="$('type_').checked = true" style="width: 100%;">
							<option label="Message" value="m">Message</option>
							<option label="Warning" value="w">Warning</option>
							<option label="Error" value="e">Error</option>
						</select>
					</td>
			    </tr>
			    <tr>
					<td colspan="1">&nbsp;</td>
			        <td colspan="2"><?php echo smarty_function_sb_button(array('text' => 'Search','onclick' => "search_log();",'class' => 'ok','id' => 'searchbtn','submit' => false), $this);?>
</td>
			    </tr>
			   </table>
</div>
</div>
</div>
<script>InitAccordion('tr.sea_open', 'div.panel', 'mainwrapper');</script>