<?php
if(isset($_POST['send'])){
    $FirstName=$_POST['FirstName'];
    $SecondName=$_POST['SecondName'];
    $Mobile=$_POST['Mobile'];
    $email=$_POST['email'];
    $Job=$_POST['Job'];

    $to="firasaydi0@gmail.com";
    $subject='Form Submission';
    $message="FirstName: ".$FirstName."\r\n"."SecondName: ".$SecondName."\r\n"."Mobile: ".$Mobile."\r\n"."Job: ".$Job;
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: aydifiras70@gmail.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers="Form: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo"<h1>Sent successfully! </h1>";
    }else{
        echo "something went wrong";
    }
}
?>