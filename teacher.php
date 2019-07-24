<!DOCTYPE html>
<html>
<head>
    <title>School Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <?php include 'dbconnect.php'; ?>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>

    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="d-flex align-items-center">
<!--   it wii bring the school name from database             -->
                <?php
                mysqli_query($connection,"SET NAMES 'utf8'");
                mysqli_query($connection,'SET CHARACTER SET utf8');
                $quary ="SELECT schoolName FROM settings";
                $s_name = mysqli_query($connection,$quary);
                $result = mysqli_fetch_assoc($s_name);
                $school_name= $result['schoolName'];

                if(isset($_POST['register'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $re_password = $_POST['re_password'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $identity = $_POST['identity'];
                    $birthdate = $_POST['birth_date'];
//                    $course = $_POST['course'];
                    if(!empty($password && $re_password)) {
                        if ($password !== $re_password) {
                            print  $massage = "كلمة المرور غير متطابقة";
                        } else {
                            require "teacher_register.php";

                        }
                    }
//                    else{
//                        header("location: teacher.php");
//                    }
                }
                ?>
                <div class="site-logo mr-auto w-25"><a href="index.php"><?php  echo $school_name  ;  ?></a></div>
                <div class="mx-auto text-center">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                            <li><a href="admin.php" class="nav-link">صفحة المدير</a></li>
                            <li><a href="" class="nav-link"></a></li>
                            <li><a href="#programs-section" class="nav-link"> </a></li>
                            <li><a href="#teachers-section" class="nav-link"> </a></li>
                        </ul>
                    </nav>
                </div>

                <div class="ml-auto w-25">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="intro-section" id="home-section">

        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-item" >
                    <div class="row align-items-center" style="margin-left:400px !important" data-aos="fade-up" data-aos-delay="500">
                        <form action="" method="post" class="form-box">
                            <h3 class="h4 text-black mb-4">تسجيل المدرس</h3>
                            <div class="form-group">
                                <input type="text"  class="form-control" name="name"  placeholder="الاسم الكامل للمدرس" required>
                            </div>
                            <div class="form-group">
                                <input type="email"  class="form-control" name="email"  placeholder="البريد الإلكتروني" required>
                            </div>
                            <div class="form-group">
                                <input type="password"  class="form-control" name="password" placeholder="كلمة المرور" required>
                            </div>
                            <div class="form-group">
                                <input type="password"  class="form-control" name="re_password" placeholder="أعد إدخال كلمة المرور" required>
                            </div>
                            <div class="form-group">

<!--                                <select name="course" required>-->
<!--   it will bring the courses from database             -->
<!--                                    <option  selected="selected" value=""> اختر المادة</option>-->
<!--                                    --><?php
//                                        $select=  "SELECT * FROM courses";
//                                        $courses= mysqli_query($connection,$select);
//                                       foreach ($courses as $course){
//                                            $name=$course['courseName'];
//                                        echo '<option onselect value="' . $course['courseId'] . '">' . $course['courseName'] . '</option>';
//                                        }
//                                    ?>
<!--                                </select>-->

<!--                                <input type=""  class="form-control" name="re-password" placeholder="أعد إدخال كلمة المرور" required>-->
                            </div>
                            <div class="form-group">
                                <input type="tel"  class="form-control" name="phone"  placeholder="رقم الهاتف" required>
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control" name="address"  placeholder="عنوان الإقامة" required>
                            </div>
                            <div class="form-group">
                                <input type="date"  class="form-control" name="birth_date"  placeholder="تاريخ الميلاد" required>
                            </div><div class="form-group">
                                <input type="number"  class="form-control" name="identity"  placeholder="رقم البطاقة" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-pill" name="register" value="تسجيل"  >
                            </div>
<!--                            --><?php //echo $massage; ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <footer class="footer-section bg-white">
        <div class="container">
            <div class="row">


                <table >
                    <tr>
                        <th> </th>
                        <th> </th>
                        <th>عنوان الإقامة</th>
                        <th>تاريخ الميلاد</th>
                        <th>رقم الهاتف</th>
                        <th>رقم البطاقة</th>
<!--                        <th>كلمة المرور</th>-->
                        <th>البريد الإلكتروني</th>
                        <th>اسم المدرس</th>
                    </tr>
                    <?php
                        mysqli_query($connection,"SET NAMES 'utf8'");
                        mysqli_query($connection,'SET CHARACTER SET utf8');
                        $table_select_query = "select * from users join userhasrole on users.userId=userhasrole.userId where userhasrole.roleId=2 ";
                        $table_elements = mysqli_query($connection,$table_select_query);

                    while ($element = mysqli_fetch_array($table_elements)){
                        $u_id = $element['userId'];
                        $u_name = $element['userFullName'];
                        $u_email = $element['email'];
                        $u_password = $element['password'];
                        $u_identity = $element['identityNO'];
                        $u_phone = $element['phone'];
                        $u_address = $element['address'];
                        $u_birth_date = $element['dateOfBirth'];


                        echo'<tr>';
                                echo '<form action="teacher_update.php" method="post">';
                                echo '<th><button type="submit" name="button" class="btn-danger" value='.$u_id.'> حذف </button></th>';
                                echo '<th><button type="submit" name="button" class="btn-success" value='.$u_id.'> تعديل </button></th>';
                                echo '</form>';
                                echo'<th>'. $u_address.'</th>';
                                echo '<th>'. $u_birth_date.'</th>';
                                echo'<th>'. $u_phone .'</th>';
                                echo'<th>'. $u_identity.'</th>';
//                                echo'<th>'. $u_password.'</th>';
                                echo'<th>'. $u_email.'</th>';
                                echo'<th>'. $u_name;'</th>';
                        echo'</tr>';
                     }
                    ?>
            </div>
            <?php mysqli_close($connection); ?>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    

                </div>

            </div>
        </div>
    </footer>



</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>


<script src="js/main.js"></script>

</body>
</html>