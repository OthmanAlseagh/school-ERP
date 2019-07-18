<?php
include 'dbconnect.php';
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    mysqli_query($connection,"SET NAMES 'utf8'");
    mysqli_query($connection,'SET CHARACTER SET utf8');
    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $query_result = mysqli_query($connection, $query);
    if (!$query_result) {
        die("Error connection" . mysqli_connect_error($connection));
    }
    $result = mysqli_fetch_assoc($query_result);
    $user_id = $result['userId'];
    $user_name = $result['userFullName'];
    $user_email = $result['email'];
    $user_password = $result['password'];
    if ($email !== $user_email && $password !== $user_password) {
        header("Location: index.php");

    } else if ($email == $user_email && $password == $user_password) {
        $query_role= "SELECT * FROM users JOIN userhasrole ON users.userId=userhasrole.userId WHERE userhasrole.roleId = '{$user_id}'";
        $role_result = mysqli_query($connection,$query_role);
        $re=mysqli_fetch_assoc($role_result);
        if($re['roleId']== 1){
            header("Location: admin.php");
        }elseif ($re['roleId']== 2){
            header("Location: teacher.php");
        }else{
            header("Location: student.php");
        }

    } else {
        header("Location: index.php");
    }

}