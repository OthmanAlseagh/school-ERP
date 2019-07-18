<?php

$connection = mysqli_connect("localhost","root","","school_mang");
if (!isset($connection)){
    die("connection Error" . mysqli_connect_error()) ;
    }
else{
    //echo "we are connected!!";
    }
//$query =" SELECT grade FROM courseregester where userId = 1";
//$student = mysqli_query($connection,$query);
//while ($row = mysqli_fetch_row($student))
//    {
//    print_r($row);
//    }



