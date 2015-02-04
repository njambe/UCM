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


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

print_heading('Bank Transfer Settings');
module_config::print_settings_form(
    array(
         array(
            'key'=>'payment_method_banktransfer_enabled',
            'default'=>1,
             'type'=>'checkbox',
             'description'=>'Enable Payment Method',
         ),
         array(
            'key'=>'payment_method_banktransfer_label',
            'default'=>'Bank Transfer',
             'type'=>'text',
             'description'=>'Name this payment method',
         ),
    )
);

print_heading('Bank Transfer Templates');
echo module_template::link_open_popup('paymethod_banktransfer');
echo module_template::link_open_popup('paymethod_banktransfer_details');
?>
