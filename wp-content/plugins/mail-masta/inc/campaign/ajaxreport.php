<?php 

	global $wpdb;


 $masta_report = $wpdb->prefix . "masta_reports";
$masta_campaign = $wpdb->prefix . "masta_campaign";



$camp_id=$_POST['last_ten_open'];
$offset=$_POST['offset'];


 	$get_last_mail=$wpdb->get_results("select subscriber_email from $masta_report where camp_id=$camp_id and opened=1 order by open_date desc  LIMIT $offset , 10");
								foreach($get_last_mail as $get_last){
									echo "<li>";
									echo $get_last->subscriber_email;
									echo "</li>";
								}
									?>


