<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 7804 a0be03b8de20797ee5d25cd381c66018
  * Envato: free
  * Package Date: 2015-02-05 04:55:54 
  * IP Address: 127.0.0.1
  */ 


if(isset($_REQUEST['user_id'])){


    $user_safe = true;
    include(module_theme::include_ucm("includes/plugin_user/pages/contact_admin_edit.php"));
    //include("contact_admin_edit.php");

}else{ 
	
    include(module_theme::include_ucm("includes/plugin_user/pages/contact_admin_list.php"));
    //include("contact_admin_list.php");

} 

