<?php /* Smarty version 2.6.31, created on 2021-12-25 15:03:20
         compiled from page_footer.tpl */ ?>
</div>
</div>
<footer class="footer">
	<div class="container-fluid clearfix">
		<span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021
		<a href="http://www.datenshi.pw/" target="_blank">DATENSHI</a>. All rights reserved.</span>
	</div>
</footer>
</div>
</div>
<script src="themes/<?php echo SB_THEME; ?>/js/off-canvas.js"></script>
<script src="themes/<?php echo SB_THEME; ?>/js/misc.js"></script>
<script src="themes/<?php echo SB_THEME; ?>/js/countTo.js"></script>
<?php echo '
<script>
	document.getElementById("content_title").remove();
	function fixToolTip() {
		setTimeout(
		function() {
			var tooltips = document.getElementsByClassName("tool-tip");
			for(i=0;i<tooltips.length;i++)
			{
				tooltips[i].className+="tool-tip badge badge-primary";
			}
		}, 2000);
	}
	fixToolTip();
	var bc=document.getElementById("breadcrumb");
	var bc_explode = bc.innerHTML.split("»");
	var newbc="";
	for(i=1;i<bc_explode.length;i++)
	{
		newbc+="<li class=\\"breadcrumb-item\\">";
		newbc+=bc_explode[i]
		newbc+="</li>";
		newbc = newbc.replace("<b>", "");
		newbc = newbc.replace("</b>", "");
	}
	bc.innerHTML = newbc;
	//document.getElementById("breadcrumb").remove();
</script>

<script>
	AOS.init();
</script>
'; ?>
