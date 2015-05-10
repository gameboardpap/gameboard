<?php exit; ?>
1429994852
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 2 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
774
a:1:{i:0;a:11:{s:8:"style_id";s:1:"2";s:8:"theme_id";s:1:"2";s:10:"theme_data";s:383:"/*  phpBB3 Style Sheet
    --------------------------------------------------------------
	Style name:			ComBoot Free
	Based on style:		
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		phpBB Group ( http://www.phpbb.com/ )
	Customised by:		Florian Gareis ( http://www.florian-gareis.de/ )
    --------------------------------------------------------------
*/";s:10:"theme_path";s:7:"ComBoot";s:10:"theme_name";s:12:"ComBoot Free";s:11:"theme_mtime";s:10:"1428930541";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:12:"ComBoot Free";s:18:"imageset_copyright";s:22:"© Florian Gareis 2015";s:13:"imageset_path";s:7:"ComBoot";s:13:"template_path";s:7:"ComBoot";}}