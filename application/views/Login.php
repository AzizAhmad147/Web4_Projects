

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Application! | </title>

<!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/css/nprogress.css'); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="reset"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?= base_url('index.php/Online_Shoping_System_Controller/login'); ?>">
              <h1>فرم ورود</h1>
              <div>
                <input type="text" class="form-control" name="uname" placeholder="نام کاربری" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="رمز ورود" required="" />
              </div>
              <div> 
                <input type="submit" class="btn btn-default submit" value="ورود"  />
                <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">کاربر جدید در سیستم؟
                  <a href="#signup" class="to_register"> ایجاد حساب </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> فروشگاه آنلاین</h1>
                  <p>©2018 تمامی حقوق محفوظ. فروشگاه آنلاین! می باشد</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>ایجاد حساب</h1>
              <div>
                <input type="text" class="form-control" placeholder="نام کاربری" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="ایمیل" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="رمز ورود" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="Home">ارسال</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">در حال حاضر عضو هستید؟
                  <a href="#signin" class="to_register"> ورود </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> فروشگاه آنلاین</h1>
                  <p>©2018 تمامی حقوق محفوظ. فروشگاه آنلاین! می باشد</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="rest_pass" class="animate form rest_pass_form">
          <section class="login_content">
            <!-- /password recovery -->
            <form action="Home">
              <h1>بازیابی رمز عبور</h1>
              <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="ایمیل" />
                <div class="form-control-feedback">
                  <i class="fa fa-envelope-o text-muted"></i>
                </div>
              </div>
              <button type="submit" class="btn btn-default btn-block">بازیابی رمز عبور </button>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">جدید در سایت؟
                  <a href="#signup" class="to_register"> ایجاد حساب </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> فروشگاه آنلاین</h1>
                  <p>©2018 تمامی حقوق محفوظ. فروشگاه آنلاین! می باشد</p>
                </div>
              </div>
            </form>
            <!-- Password recovery -->
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
