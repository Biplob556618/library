<?php
session_start();
include("db.php");
class data extends db
{
    private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branch;
    private $bookprice;
    private $bookquantity;
    private $type;

    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;


    function __construct(){


    }
    function adminLogin($t1,$t2)
    {
        $q = "Select * From admin where email='$t1'and pass='$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();

        if($result>0){
            foreach($recordSet->fetchAll()as $row){
                
                $logid = $row['id'];
                $_SESSION["adminid"] = $logid;
            header("Location:admin_service_dashboard.php");
            }
        }elseif($result<=0){ 
            header("Location:index.php?msg=Unresister Admin User or Worong Password");

        }
    
    }


    function addnewuser($name, $pasword, $email, $type)
    {
$this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        $this->type=$type;


         $q="INSERT INTO userdata(id, name, email, pass,type)VALUES('','$name','$email','$pasword','$type')";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }
}