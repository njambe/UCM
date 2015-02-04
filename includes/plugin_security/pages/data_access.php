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

$access = true;


switch($table_name){
    case 'invoice':
    default:
        // check if current user can access this invoice.
        if($data && isset($data['customer_id']) && (int)$data['customer_id']>0){
            $valid_customer_ids = module_security::get_customer_restrictions();
            if($valid_customer_ids){
                $access = isset($valid_customer_ids[$data['customer_id']]);
                if(!$access)return false;
            }
        }
        break;
}