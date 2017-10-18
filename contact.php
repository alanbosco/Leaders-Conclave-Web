<?php

$field_name = $_POST["name"];
$field_email = $_POST["mail"];
$field_sub = $_POST["sub"];
$field_message = $_POST["message"];

$to = "info@leadersconclave.in";
$subject = "MAIL FROM SITE a VISITOR".$field_name;
$message = "NAME:".$field_name."\n EMAIL-ID:".$field_email."\n SUBJECT:".$field_sub."\n MESSAGE".$field_message;

if(mail($to,$subject,$message))
 {
      echo "<script>alert('Your Message was sent Successfully. Thank You For Your Time !');</script>";
      }
      else
      {
      echo "<script>alert('Something wrong happened. Please try again later. Sorry For The Trouble');		            </script>";
      }
    

?>
<meta http-equiv="refresh" content="2; url=index.html">
<!--<meta http-equiv="refresh" content="2; url=../image_slider/ads.html">
header("Location: ../image_slider/ads.html");-->