<?php


class helper {
    public $connection;
//include "dbconnect.php";
    function __construct($connection)
    {

       $this->connection = $connection;
    }

    function   find_value() {


            $button_value = $_POST['button'];
            $query = "SELECT users.userFullName,users.email,users.identityNO,users.phone,users.address,users.dateOfBirth, courses.courseName FROM users,courses,courseregester WHERE courseregester.courseId = courses.courseId AND courseregester.userId = users.userId AND users.userId = {$button_value}";
            $result = mysqli_query($this->connection, $query);
            $fetch = mysqli_fetch_assoc($result);
            $fetch['id']=$button_value;
//            print_r ($fetch);
        return $fetch;


    }

    function update_teacher( $data){


            $id=$data['id'];
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $address = $data['address'];
            $identity = $data['identity'];
            $birthdate = $data['birth_date'];
            $course = $data['course'];
//            $password = $data['password'];
//            $re_password = $data['re_password'];
//            if (!empty($password && $re_password)) {
//                if ($password !== $re_password) {
//                    print  $massage = "كلمة المرور غير متطابقة";
//                } else {
//                    include "teacher_register.php";
//                }
//            } else {
//                header("location teacher.php");
//            }
            if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($identity)&&!empty($birthdate)&&!empty($course)) {
                $name = mysqli_real_escape_string($this->connection, $name);
                $email = mysqli_real_escape_string($this->connection, $email);
//                $password = mysqli_real_escape_string($this->connection, $password);
//                $re_password = mysqli_real_escape_string($this->connection, $re_password);
                $phone = mysqli_real_escape_string($this->connection, $phone);
                $address = mysqli_real_escape_string($this->connection, $address);
                $identity = mysqli_real_escape_string($this->connection, $identity);
                $birthdate = mysqli_real_escape_string($this->connection, $birthdate);
                $course = mysqli_real_escape_string($this->connection, $course);

                $query = "UPDATE users SET userFullName='{$name}',email='{$email}',identityNO={$identity},phone='{$phone}',address='{$address}',dateOfBirth='{$birthdate}' WHERE userId = {$id}";
                mysqli_query($this->connection,$query);



            }

    }
    function delete_teacher($data){
     $id=$data['id'];
     print $query="DELETE FROM users where userId = {$id}; DELETE FROM userhasrole where userId = {$id}; DELETE FROM courseregester where userId = {$id}";
     mysqli_multi_query($this->connection,$query);
       header("Location: teacher.php");

    }
}

