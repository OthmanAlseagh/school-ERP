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
                <?php
                mysqli_query($connection,"SET NAMES 'utf8'");
                mysqli_query($connection,'SET CHARACTER SET utf8');
                $quary ="SELECT schoolName FROM settings";
                $s_name = mysqli_query($connection,$quary);
                $result = mysqli_fetch_assoc($s_name);
                ?>
                <div class="site-logo mr-auto w-25"><a href="index.php"><?php  echo $result['schoolName']  ;  ?></a></div>
                <?php mysqli_close($connection); ?>
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
                        <form action="student_register.php" method="post" class="form-box">
                                          <h3 class="h4 text-black mb-4">تسجيل الطالب</h3>
                                          <div class="form-group">
                                              <input type="text"  class="form-control" name="email"  placeholder="الاسم الكامل للطالب" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="email"  class="form-control" name="email"  placeholder="البريد الإلكتروني" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="password"  class="form-control" name="password" placeholder="كلمة المرور" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="password"  class="form-control" name="re-password" placeholder="أعد إدخال كلمة المرور" required>
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
                                              <input type="text"  class="form-control" name="identity"  placeholder="رقم البطاقة" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="submit" class="btn btn-primary btn-pill" name="register" value="تسجيل">
                                          </div>
                                      </form>

                                  </div>
                </div>
            </div>
        </div>

    </div>



    <?php include 'footer.php' ?>

</body>
</html>