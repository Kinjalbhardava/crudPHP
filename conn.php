<?php


$con = new mysqli("localhost", "root","", "crud");
if($con){
 echo "connection successfull" ;
}
die("failed");


?>