<?php
if(!isset($_POST['submit']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $Email = $_POST['email'];
    $Comments = $_POST['comments'];

    if($name=='' || $contact=='' || $Email=='' || $Comments=='')

    {
        echo '<script>alert("All fileds are required!")</script>';
        header("Refresh: 5; url=https://appliancerepaircrew.ca/");
        
    }


    else{

        $email_from    =   $Email;
        $email_subject =  "New Appointment Schedule for $name";
        $email_body    = " You have received a new message from the client $name. \n
                           Name=$name. \n
                           Contact=$contact .\n
                           Email: $Email \n
                           Comments:$Comments \n";

                           $to = "mayekargaurav17@gmail.com" ;
       $headers ="From: $email_from\r\n";

mail($to,$email_subject,$email_body,$headers);

echo '<script>alert("Thankyou your message was sent and you will be assisted shortly ")</script>';

header("Refresh: 2; url=https://appliancerepaircrew.ca/");

    }
    
}


?>