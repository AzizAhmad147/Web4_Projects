
<body>
<!-- page content -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>بخش محصولات
        
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                    <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('index.php/Online_Shoping_System_Controller/create_user'); ?>" >

                            <p>استفاده کننده گرامی لطف نموده اطلاعات مربوط به یوزری  که می خواهید اضافه کنید در فورم پائین درج کنید.</p>
                            <span class="section">اضافه کردن کاربر</span>

                               
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">نام <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" type="text" name="name"  class="form-control col-md-7 col-xs-12">
                                            
                                       
                                </div>
                            </div>


                                <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">نام فامیلی <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  name="lname" type="text" class="form-control"  >

                                           
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">عکس <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  name="Image" required="required"
                                           class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">مبایل <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text"  name="phone" required="required"
                                           class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">حساب کاربری<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="number" name="email" required="required"
                                            class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                                                        <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">نام کاربری<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="number" name="uname" required="required"
                                            class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                                                        <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">رمز عبور<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="number" name="pwd" required="required"
                                            class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="save btn btn-primary">انصراف</button>
                                    <button id="send" type="submit"  class=" btn btn-success">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
<!-- /page content -->

    <script>

      document.querySelector('.save').onclick = function(){
        swal("!ذخیره شد", "محصول شما به صورت موفقیت امیز ذخیره شد", "success");
      };</script>

</body>