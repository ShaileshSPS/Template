<?php
	if(isset($_POST['contact_submit'])) {
		global $wpdb;
		
		$sql = $wpdb->insert('contact', array('name'=>$_POST['full_name'], 'email'=> $_POST['cemail'], 'message'=> $_POST['about'], 'date' => date("Y-m-d", strtotime($_POST['contact_date'])), 'time' => $_POST['contact_time']));

		if($sql == true) {
			wp_mail("team@happlabs.tech", "New Contact Added by ".$_POST['cemail'] , $_POST['about']);
			/* $rval =	[ 
	          		'success' => true,
	          		'message' => 'Successful'
  			];
			return json_encode($rval); */
		}
		
	}
?>		