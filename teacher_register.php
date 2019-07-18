<?php
include 'dbconnect.php';

    if(!empty($name)&&!empty($email)&&!empty($password)&&!empty($re_password)&&!empty($phone)&&!empty($address)&&!empty($identity)&&!empty($birthdate)&&!empty($course)) {
        $name = mysqli_real_escape_string($connection, $name);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $re_password = mysqli_real_escape_string($connection, $re_password);
        $phone = mysqli_real_escape_string($connection, $phone);
        $address = mysqli_real_escape_string($connection, $address);
        $identity = mysqli_real_escape_string($connection, $identity);
        $birthdate = mysqli_real_escape_string($connection, $birthdate);
        $course = mysqli_real_escape_string($connection, $course);

            $query = "INSERT INTO `users` (`userFullName`, `email`, `password`, `identityNO`, `phone`, `address`, `dateOfBirth`) VALUES ('{$name}', '{$email}', '{$password}', '{$identity}', '{$phone}', '{$address}', '{$birthdate}')";
            mysqli_query($connection,$query);
            $u_id = mysqli_insert_id($connection);
            //print ($u_id);
            $in_query = "INSERT INTO courseregester (userId,courseId) VALUES ('{$u_id}','{$course}'; INSERT INTO userhasrole (userId,roleId) VALUES ('{$u_id}','2')";
            $re = mysqli_multi_query($connection,$in_query);
            if(!$re){
                die("error" . mysqli_error($connection));
            }


    }
//    $email = mysqli_real_escape_string($connection, $email);
//    $password = mysqli_real_escape_string($connection, $password);
//    mysqli_query($connect
//ion,"SET NAMES 'utf8'");
//    mysqli_query($connection,'SET CHARACTER SET utf8');
//    $query = "SELECT * FROM users WHERE email = '{$email}'";
//    $query_result = mysqli_query($connection, $query);
//    if (!$query_result) {
//        die("Error connection" . mysqli_connect_error($connection));
//    }
//    $result = mysqli_fetch_assoc($query_result);
//    $user_id = $result['userId'];
//    $user_name = $result['userFullName'];
//    $user_email = $result['email'];
//    $user_password = $result['password'];
//    if ($email !== $user_email && $password !== $user_password) {
//        header("Location: index.php");
//
//    } else if ($email == $user_email && $password == $user_password) {
//        $query_role= "SELECT * FROM users JOIN userhasrole ON users.userId=userhasrole.userId WHERE userhasrole.roleId = '{$user_id}'";
//        $role_result = mysqli_query($connection,$query_role);
//        $re=mysqli_fetch_assoc($role_result);
//        if($re['roleId']== 1){
//            header("Location: admin.php");
//        }elseif ($re['roleId']== 2){
//            header("Location: teacher.php");
//        }else{
//            header("Location: student.php");
//        }
//
//    } else {
//        header("Location: index.php");
//    }

