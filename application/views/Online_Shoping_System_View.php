<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/ico"/>
    <title>Web Application! | قالب مدیریت برای وب اپیکشن </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" >
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/css/nprogress.css'); ?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

        <!-- This is what you need -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert.css'); ?>">
</head>
<!-- /header content -->
<body class="nav-md" >
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print" >
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="transition: .5s;border: 0;" >
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>فروشگاه صادقی</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo base_url('assets/images/img.jpg')?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>خوش آمدید,</span>
                        <h2>عزیز احمد صادقی</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
                    <div class="menu_section">
                        <h3>عمومی</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> خانه <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index">صفحه اول</a></li>
                                    <li><a href="index2.html">صفحه دوم</a></li>
                                    <li><a href="index3.html">صفحه سوم</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-cogs"></i> اطلاعات پایه <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="add_user">کاربر</a></li>
                                    <li><a type="btn" onclick="add_mobile()">مشتری</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#addcategory">کتگوری</a></li>
                                   
                                </ul>
                            </li>
                            <li><a><i class="fa fa-upload"></i>  بخش کالا<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                
                                    <li><a href="additem">مردانه</a></li>
                                    <li><a href="addwomen">زنانه</a></li>
                                    <li><a href="addchildren">طفلانه</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-eye"></i> دیدن بخش ها <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                
                                    <li><a href="read_user" >دیدن تمام کاربر ها</a></li>
                                    <li><a href="read_customer">دیدن تمام مشتریان</a></li>

                                </ul>
                            </li>
                              <li><a><i class="fa fa-eye"></i> دیدن کالا ها <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                
                                    <li><a href="read_men" >مردانه</a></li>
                                    <li><a href="read_women">زنانه</a></li>
                                    <li><a href="read_children">طفلانه</a></li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i>بخش فاکتور ها <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">فاکتور خرید</a></li>
                                    <li><a href="projects.html">فاکتور فروش</a></li>
                                    <li><a href="project_detail.html">دیدن فاکتور خرید</a></li>
                                    <li><a href="contacts.html">دیدن فاکتور فروش</a></li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-search"></i>جستجو <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="MSearch">جستجوی کالا</a></li>
                                    <li><a href="projects.html">جستجوی مشتری</a></li>
                                    <li><a href="project_detail.html">جستجوی فاکتور خرید</a></li>
                                    <li><a href="contacts.html">جستجوی فاکتور فروش</a></li>

                                </ul>
                            </li>
                             <li><a><i class="fa fa-table"></i> کالا های فروخته شده <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">تمام کالا ها</a></li>

                                    
                                </ul>
                            </li>
                            <li><a><i class="fa fa-envelope"></i> پیام ها <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">دریافتی</a></li>
                                    <li><a href="tables.html">ارسالی</a></li>

                                    
                                </ul>
                            </li>

                             <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> صفحه هات اضافی <span
                            class="label label-success pull-left">به زودی</span></a></li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="خروج" href="logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav hidden-print" style="transition: 0.5s">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false" >
                                <img src="<?php echo base_url('assets/images/img.jpg')?>" alt="">عزیزاحمد صادقی
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> نمایه</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>تنظیمات</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">کمک</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="../build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>عزیزاحمد صادقی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="../build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>عزیزاحمد صادقی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="../build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>عزیزاحمد صادقی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="../build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>عزیزاحمد صادقی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>مشاهده تمام اعلان ها</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->
        
<!-- page content -->
<div class="right_col" role="main">

      <?php
      /*  if($this->session->userdata('page')){
          $this->load->view($this->session->userdata('page'));

        }else{
            echo "کدام صفحه انتخاب نشده";
        }
      */

    $this->load->view($page);


    /*  error_reporting(0);
 
    switch($_REQUEST['con'])
    {
        case 'additem':
        $this->load->view('AddItem');
        #include("AddItem.php");
            break;
        case 'adduser':
        $this->load->view('AddUser');
         break;
         case 'users':
        $this->load->view('AllUser');
         break;

       
    }*/


    ?>



</div>

    <!-- /top tiles -->

    <!-- All Modals-->

    <div class="modal fade" id="addcategory" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-right" >
                                            <form method="post" action="<?= base_url('index.php/Online_Shoping_System_Controller/create_category'); ?>">

                                           <div class="form-group">
                                          <label>کد نمببر</label>
                                              <input type="text" class="form-control" name="Id" required>
                                            </div>

                                     <div class="form-group">
                                     <label>کتگوری</label>
                                  <input type="text" class="form-control" name="Category" required>
                                 </div>
                                    
                                <div class="modal-footer">
                                <button   class=" save btn btn-success ">ذخیره</button>
                                <button  class="btn btn-danger"  data-dismiss="modal">منصرف</button>
        
                                           </div>
                                        

                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


         <div class="modal fade" id="addsubcategory" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-right" >
                                            <form method="post" action="<?= base_url('index.php/Online_Shoping_System_Controller/create_subcategory'); ?>">

                                           <div class="form-group">
                                          <label>سب کتگوری</label>
                                              <select  class="form-control" name="CatId" >
                                               
                                              <?php  foreach($Category as $cat){ ?>
                                                <option value="<?php echo $cat['Id']; ?>">

                                                 <?php echo $cat['Category']; ?>


                                                </option>
                                                 <?php  } ?>
                                                  

                                              </select>
                                            </div>

                                     <div class="form-group">
                                     <label>کتگوری</label>
                                  <input type="text" class="form-control" name="Subcategory" required>
                                 </div>
                                    
                                <div class="modal-footer">
                                <button   class=" save btn btn-success ">ذخیره</button>
                                <button  class="btn btn-danger"  data-dismiss="modal">منصرف</button>
        
                                           </div>
                                        

                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="modal fade" id="addcustomer" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-right" >
                                            <form action="#" id="form" >

                                           <div class="form-group">
                                          <label>نام</label>
                                              <input type="text" class="form-control" name="fname" required >
                                            </div>

                                     <div class="form-group">
                                     <label>نام فامیلی</label>
                                  <input type="text" class="form-control" name="lname" required>
                                 </div>

                                     <div class="form-group">
                                     <label>مبایل</label>
                                  <input type="number" class="form-control" name="phone" required>
                                 </div>
                                     <div class="form-group">
                                     <label>آدرس</label>
                                  <textarea class="form-control" name="address" required>
                                    
                                    </textarea>
                                 </div>
                                    
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          </div>
                                        

                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

    <!--  /All Modals -->

    
<!-- /page content -->

        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-right">
                قالب وب اپلیکشن <a href="https://colorlib.com">Web Application</a> |  دیزاین شده توسط <a
                    href="https://morteza-karimi.ir">عزیزاحمد صادقی</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>

<script type="text/javascript">
    
        function add_mobile()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#addcustomer').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
     function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo base_url('index.php/Online_Shoping_System_Controller/create_customer')?>";
      }
      else
      {
        url = "<?php echo site_url('mobiles/mobile_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#addcustomer').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 function edit_mobile(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('mobiles/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="mobile_id"]').val(data.id);
            $('[name="model_no"]').val(data.model_no);
            $('[name="mobile_name"]').val(data.mobile_name);
            $('[name="company"]').val(data.company);
            $('[name="mobile_category"]').val(data.mobile_category);
 
 
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Mobile'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
</script>

<script type="text/javascript">
   
$(document).ready(function(){
  $('#category').on('change',function(){
    var Id=$(this).val();
      if(Id==''){
        $('#subcategory').prop('disabled',true);
      }
      else{
      $('#subcategory').prop('disabled',false);
      $.ajax({
        url:"<?php echo base_url() ?>index.php/Online_Shoping_System_Controller/read_subcategory",
        type:"POST",
        data:{'Id':Id},
       dataType: 'json',
        success: function(data){
          
          $('#subcategory').html(data);
        },
        error:function(){
          alert('error ocur.....!!');
        }

      });
      }
  });

});

 </script>
 


<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/js/lib/fastclick.js'); ?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('assets/js/nprogress.js'); ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('assets/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>


<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js'); ?>"></script>


</body>
</html>
