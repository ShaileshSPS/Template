<?php
      if(isset($_POST['demo_submit'])) {
        global $wpdb;

        $sql = $wpdb->insert('schedule_demo', array('first_name'=> $_POST['firstName'], 'last_name' => $_POST['lastName'], 'email'=> $_POST['email'], 'company' => $_POST['company'], 'job_function'=> ($_POST['job_function'] == '')? '' : $_POST['job_function'], 'country' => $_POST['country'], 'needs'=> $_POST['needs']));

        if($sql == true) {
          wp_mail("team@happlabs.tech", "Schedule Demo Added by ".$_POST['email'] , $_POST['needs']);
        }

      }
?>    