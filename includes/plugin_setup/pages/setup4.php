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

// todo: _DEMO_MODE - dont allow access to setup wizard.



if(_UCM_INSTALLED && !module_security::is_logged_in()){
    ob_end_clean();
    echo 'Sorry the system is already installed. You need to be logged in to run the setup again.';
    exit;
}

print_heading('Step #4: Email Configuration');?>

      <p>Now that the system is installed, it's time to setup your email settings. Please contact your hosting provider if you are unsure of your email settings (some hosting providers require special settings for PHP scripts). If your SMTP details are not working, you can just try the default settings (ie: everything blank) to see if that works. </p>

    <?php include('includes/plugin_email/pages/email_settings.php');?>


<p>&nbsp;</p>
<p>Once you are happy with the above email settings please click continue below. </p>

<p align="center"><a href="?m=setup&amp;step=5" class="submit_button btn btn-success">Complete Setup &raquo;</a></p>