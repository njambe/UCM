<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_form">
	<tbody>
		<tr>
			<th class="width1">
				<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 7804 a0be03b8de20797ee5d25cd381c66018
  * Envato: free
  * Package Date: 2015-02-05 04:55:54 
  * IP Address: 127.0.0.1
  */ echo _l('Customer Name'); ?>
			</th>
			<td>
				<?php echo $customer_data['customer_name'];?>
				<a href="<?php echo module_customer::link_open($customer_id);?>">&raquo;</a>
			</td>
		</tr>
	</tbody>
</table>