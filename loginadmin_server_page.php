<?php
include ("data_class.php");
$login_email = $_GET['login_email'];
$login_pasword = $_GET['login_pasword'];

if($login_email==null||$login_pasword==null){
    $emailmsg = "";
    $pasdmsg = "";
    if ($login_email==null) {
    $emailmsg="Email is Empty";
    
    }

    if ($login_pasword==null) {
        $emailmsg = "Password is Empty";
        
        }

    header("Location:index.php?ademailmsg=$emailmsg&adpasdmsg=$pasdmsg");
}elseif($login_email!=null&&$login_pasword!=null){
    $obj = new data();
    $obj->setconnection();
   
}