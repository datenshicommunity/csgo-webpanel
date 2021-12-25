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
<script src="themes/{php}echo SB_THEME;{/php}/js/off-canvas.js"></script>
<script src="themes/{php}echo SB_THEME;{/php}/js/misc.js"></script>
<script src="themes/{php}echo SB_THEME;{/php}/js/countTo.js"></script>
{literal}
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
		newbc+="<li class=\"breadcrumb-item\">";
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
{/literal}
{*/body*}
{*/html*}
