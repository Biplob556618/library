<?php
session_start();
$adminid= $_SESSION["adminid"];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="">
    </head>
    <style>
.imglogo{
    margin: auto;
    width: 50%;
  
}
.innerdiv{
    text-align: center;
    margin:100px;
    background-color: aqua;
}
.Leftinnerdiv{

    float:left;
    width: 25%;
}
.greenbtn{
background-color: rgb(16,170,16);
color:white;
width: 95%;
height: 40px; 
margin-top: 8px;


} 

    </style>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class ="container">
         <div class= "innerdiv">
        <div class="row"><img class="imglogo" src="image/library_img.png"/></div>
         <div class= "Leftinnerdiv">
          <button class= "greenbtn">Admin</button>
          <br>
                <Button class="greenbtn" onclick="openpart('addbook')" >  ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" >  BOOK REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> ADD STUDENT</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> STUDENT REPORT</Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')"> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> ISSUE REPORT</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>

         </div>

         </div>   
            
        </div>

        <script src="" async defer></script>
    </body>
</html>