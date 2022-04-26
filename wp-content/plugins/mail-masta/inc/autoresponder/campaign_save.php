<?php

ob_start();

session_start();

//print_r($_POST);exit;


global $wpdb;

date_default_timezone_set(get_option('timezone_string'));

/*First step start*/



    if($_POST['step']=="first_step")

    {

        $camp_name    =  $_POST['camp'];

        $sender_name  =  $_POST['sname'];

       $sender_email =  $_POST['semail'];

       $sender_list =  $_POST['slistid'];

		$subject =  $_POST['subject'];
       

        

        if(isset($_SESSION['add']['camp_id']) && $_SESSION['add']['camp_id'] <> "" )

        {

           // echo $_SESSION['camp_id'];exit;

            

            $update_data  = array('to_list' => $sender_list, 'responder_name' => $camp_name , 'subject' => $subject ,  'support'=>$camp_name, 'from_name'=>$sender_name,'from_email'=>$sender_email,'create_date' => date("Y-m-d H:i:s"));

           // echo $update_data;exit;

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $lastid = array('responder_id'=>$_SESSION['add']['camp_id']);

            //echo $_SESSION['camp_id']; exit;

            

            $rows_affected_one = $wpdb->update( $masta_campaign, $update_data, $lastid);

            $error = $wpdb->print_error();

            if(trim($error) <>  "")

            {

               echo $error;

			} else {

				echo 'insert successfully';exit;	

			}

                 

        }

        else

        {

            $insert_data  = array('to_list' => $sender_list, 'responder_name' => $camp_name , 'subject' => $subject , 'support'=>$camp_name, 'from_name'=>$sender_name,'from_email'=>$sender_email,'create_date' => date("Y-m-d H:i:s"));

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $rows_affected_one = $wpdb->insert($masta_campaign, $insert_data);

            $error = $wpdb->print_error();

            if(trim($error) <>  "")

            {

               echo $error;

            }

            else

            {

                $lastid = $wpdb->insert_id;

                $_SESSION['add']['camp_id'] = $lastid; 

                echo 'insert successfully';exit;       

            }

        }

    }

    

/*First step end*/



    

/*Second step start*/

    

    if($_POST['step']=="second_step")

    

		

    {

        

        $list_name    =  $_POST['slistid'] ;

       //echo $_SESSION['camp_id']; exit;

        if(isset($_SESSION['add']['camp_id']) && $_SESSION['add']['camp_id'] <> "" )

        {

            $update_data  = array('to_list' => $list_name,'create_date' => date("Y-m-d H:i:s"));

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $campaign_id = array('responder_id'=>$_SESSION['add']['camp_id']);

            $rows_affected_one = $wpdb->update( $masta_campaign, $update_data, $campaign_id);

            $error = $wpdb->print_error();

            if(trim($error) <>  "")

            {

               echo $error;

            } else {

				echo 'insert successfully';exit;	

			}

             

        }

        

    }

    

/*Second step End*/



     

/*Third step start*/



    if($_POST['step']=="third_step")

    {

        $camp_data =  $_POST['campbody'];

        $resmail = $_POST['resmail']; 

        //echo $_SESSION['camp_id'];exit;

        if(isset($_SESSION['add']['camp_id']) && $_SESSION['add']['camp_id'] <> "" )

        {

            $update_data  = array('body' => stripslashes($camp_data),'resp_mail' => stripslashes($resmail), 'create_date' => date("Y-m-d H:i:s"));

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $campbody_id = array('responder_id'=>$_SESSION['add']['camp_id']);

            //echo $lastid; exit;

            $rows_affected_one = $wpdb->update( $masta_campaign, $update_data, $campbody_id);

            $error = $wpdb->print_error();

            if(trim($error) <>  "")

            {

               echo $error;

            } else {

				echo 'insert successfully';exit;	

			}



                 

        }

        

    }

    

/*Third step end*/



/*Fourth step start*/



    if($_POST['step']=="fourth_step")

    {

        $time_zone =  $_POST['timestamp'] ;        

               

        if(isset($_SESSION['add']['camp_id']) && $_SESSION['add']['camp_id'] <> "" )

        {

            $update_data  = array('timeinterval' => $time_zone,

								 'responder_type'=>$_POST['radio'],

								 'create_date' => date("Y-m-d H:i:s"),

                                   'status'=>5 

                                   );

            

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $timestamp_id = array('responder_id'=>$_SESSION['add']['camp_id']);

            $rows_affected_one = $wpdb->update( $masta_campaign, $update_data, $timestamp_id);

            $error = $wpdb->print_error();

            if(trim($error) <>  "")

            {

               echo $error;

            } else {

				echo 'insert successfully';exit;	

			}   

        }

        

        

    }

    /*last step start*/



    if($_POST['step']=="last_step")

    {

       // $time_zone =  $_POST['timestamp'] ;

      // echo "1";die;

               

        if(isset($_SESSION['add']['camp_id']) && $_SESSION['add']['camp_id'] <> "" )

        {

            $camp_id = array('responder_id'=> $_SESSION['add']['camp_id']);

            $update_data  = array('status'=>5);

            //print_r($camp_id);exit;

            $masta_campaign = $wpdb->prefix . "masta_responder";

            $rows_affected = $wpdb->update( $masta_campaign, $update_data, $camp_id);

            //echo  $_SESSION['add']['camp_id'];die;

            //$error = $wpdb->print_error();

           if($_POST['status'] !='1' && $_POST['type'] =='1')

                {

                   echo "respid_".$_SESSION['add']['camp_id'];

                }

                

                else

                {

                    echo "2";

                }

        }

        

        

    }

    

    if(!empty($_POST['change_status']) &&  !empty($_POST['camp_id'])){

		

	   $camp_id = $_POST['camp_id'];

       $status = $_POST['status'];	    

	   $camp_id = array('responder_id'=> $camp_id);

		$update_data  = array('status'=>$status);

		//print_r($camp_id);exit;

		$masta_campaign = $wpdb->prefix . "masta_responder";

		$rows_affected = $wpdb->update( $masta_campaign, $update_data, $camp_id);

	    echo 'true';

	}





?>

