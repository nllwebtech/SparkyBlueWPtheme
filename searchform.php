<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
		<input type="text" name="s" id="s" class="textbox" value="Search the Site" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
		<input id="btnSearch" type="submit" name="submit" value="<?php _e('Go'); ?>" />
	</form>
