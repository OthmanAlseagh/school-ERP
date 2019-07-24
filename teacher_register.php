<?php
include 'dbconnect.php';

    if(!empty($name)&&!empty($email)&&!empty($password)&&!empty($re_password)&&!empty($phone)&&!empty($address)&&!empty($identity)&&!empty($birthdate)) {
        $name = mysqli_real_escape_string($connection, $name);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $re_password = mysqli_real_escape_string($connection, $re_password);
        $phone = mysqli_real_escape_string($connection, $phone);
        $address = mysqli_real_escape_string($connection, $address);
        $identity = mysqli_real_escape_string($connection, $identity);
        $birthdate = mysqli_real_escape_string($connection, $birthdate);
        //$course = mysqli_real_escape_string($connection, $course);


        mysqli_query($connection,"SET NAMES 'utf8'");
        mysqli_query($connection,'SET CHARACTER SET utf8');
        $password = crypt($password,'$2y$08$schoolmanagementothm13$');
          $query = "INSERT INTO users (`userFullName`, `email`, `password`,`identityNO`, `phone`, `address`, `dateOfBirth`) VALUES ('{$name}', '{$email}','{$password}', '{$identity}', '{$phone}', '{$address}', '{$birthdate}')";
             mysqli_query($connection,$query);
             $u_id = mysqli_insert_id($connection);
            $role_select = "SELECT roleId FROM roles WHERE roleName = 'teacher'";
            $rol=mysqli_query($connection,$role_select);
            $rol_sel=mysqli_fetch_assoc($rol);
             $role_id=$rol_sel['roleId'];
             $ins_query="INSERT INTO userhasrole (userId,roleId) VALUES ($u_id,$role_id)";
            $que=mysqli_query($connection,$ins_query);
             mysqli_query($connection,$que);
//
//            $in_query = "INSERT INTO courseregester (userId,courseId) VALUES ('{$u_id}','{$course}') ";
//            if (!$re = mysqli_multi_query($connection,$in_query)){
//                die('errorend' . mysqli_error($connection));}
//
//
              }
