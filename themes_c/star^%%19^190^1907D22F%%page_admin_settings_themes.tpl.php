<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from page_admin_settings_themes.tpl */ ?>
<div class="row">
   <div class="col-lg-12 grid-margin">
      <div class="card">
         <div class="card-body">
            <h3>Themes</h3>
            <div class="row">
               <div id="current-theme-holder" class="col-lg-6">
                  <h4 class="lead">Selected Theme: <span id="theme.name"><?php echo $this->_tpl_vars['theme_name']; ?>
</span></h4>
                  <div id="current-theme-details">
                     <?php echo '
                     <style>.imgfix > img { width:250px !important; height:170px !important;}</style>
                     '; ?>

                     <div class="row">
                        <div class="col imgfix mx-auto" id="current-theme-screenshot" style="flex-grow: inherit !important;"><?php echo $this->_tpl_vars['theme_screenshot']; ?>
</div>
                        <div class="col">
                           <div class="table-responsive align-items-start">
                              <table class="table table-sm">
                                 <tr>
                                    <td><b>Theme Author:</b></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div id="theme.auth"><?php echo $this->_tpl_vars['theme_author']; ?>
</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td><b>Theme Version:</b></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div id="theme.vers"><?php echo $this->_tpl_vars['theme_version']; ?>
</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td><b>Theme Link:</b></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div id="theme.link"><a href="<?php echo $this->_tpl_vars['theme_link']; ?>
" target="_new"><?php echo $this->_tpl_vars['theme_link']; ?>
</a></div>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                           <div id="theme.apply" class="text-right my-3">
                              <input type="button" class="btn secondary " disabled value="Apply Theme">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h4 class="lead">Available Themes</h4>
                  <p>Click a theme below to see details about it.</p>
                  <nav class="sidebar sidebar-themes" id="theme-list">
                     <ul class="nav">
                        <?php $_from = $this->_tpl_vars['theme_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fe_themes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_themes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['theme']):
        $this->_foreach['fe_themes']['iteration']++;
?>
                        <li class="nav-item <?php if ($this->_tpl_vars['theme_name'] == $this->_tpl_vars['theme']['name']): ?>active<?php endif; ?>" id="t_<?php echo ($this->_foreach['fe_themes']['iteration']-1); ?>
" onclick="fixActive(<?php echo ($this->_foreach['fe_themes']['iteration']-1); ?>
);"><a href="javascript:void(0);" onclick="javascript:xajax_SelTheme('<?php echo $this->_tpl_vars['theme']['dir']; ?>
');" class="nav-link"><b><?php echo $this->_tpl_vars['theme']['name']; ?>
</b></a></li>
                        <?php endforeach; endif; unset($_from); ?>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php echo '
<script type="text/javascript">
   function fixActive(num){
   	var obj = document.getElementById("theme-list").getElementsByTagName("li");
   	for(i = 0;i<obj.length;i++)
   	{
   		obj[i].removeClass("active");
   	}
   	obj[num].addClass("active");
   }
</script>
'; ?>