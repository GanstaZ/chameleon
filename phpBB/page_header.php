<?php
/***************************************************************************  
 *                              page_header.php
 *                            -------------------                         
 *   begin                : Saturday, Feb 13, 2001 
 *   copyright            : (C) 2001 The phpBB Group        
 *   email                : support@phpbb.com                           
 *                                                          
 *   $Id$
 *                                                            
 * 
 ***************************************************************************/ 


/***************************************************************************  
 *                                                     
 *   This program is free software; you can redistribute it and/or modify    
 *   it under the terms of the GNU General Public License as published by   
 *   the Free Software Foundation; either version 2 of the License, or  
 *   (at your option) any later version.                      
 *                                                          
 * 
 ***************************************************************************/ 


switch($pagetype) 
{
 case 'index':
   $page_title = "Forum Index";
   $template->set_file(array("overall_header" => "overall_header.tpl",
			     "header" => "index_header.tpl",
			     "body" => "index_body.tpl",
			     "footer" => "index_footer.tpl",
			     "overall_footer" => "overall_footer.tpl"));
   $template->set_var(array("SITENAME" => $sitename,
			    "PAGE_TITLE" => $page_title,
			    "META_INFO" => $meta_tags,
			    "TOTAL_POSTS" => $total_posts,
			    "TOTAL_USERS" => $total_users,
			    "NEWEST_USER" => $newest_user,
			    "NEWEST_UID" => $newest_uid,
			    "USERS_BROWSING" => $users_browsing));
		      
   $template->pparse("output", "overall_header");
   $template->pparse("output", "header");
   
   break;
}
			    
?>
