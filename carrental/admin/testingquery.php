<?php

$user=$_REQUEST['UserName'];
$password=$_REQUEST['Password'];

$con = new mysqli("localhost","root","","carrental");
// $result = $con->query( "select * from  admin ");
$result = $con->query( "select * from  admin WHERE UserName= '$user' and Password= '$password' ");
if($result){
     
    while($r= $result->fetch_object())
     {
       $row[]=$r;

     }
      echo json_encode($row);
}