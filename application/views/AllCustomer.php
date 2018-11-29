
<html>
<head>
  
</head>


<body>


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>لیست تمام مشتریان
                
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
                        <p class="text-muted font-13 m-b-30" >
                            استفاده کننده گرامی شما می توانید هر تغییراتی که می خواهید در این لیست وارد کنید.
                        </p>


                        <table id="datatable-buttons" class="table  table-bordered table-hover  ">



                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>نام فامیلی</th>
                                <th>مبایل</th>
                                <th>آدرس</th>
                                <th>تغییرات</th>

                                
                            </tr>
                            </thead>


                            <tbody>
                                <?php if (count($allcustomer)): ?>
                                <?php
                                  
                                $i=1; foreach ($allcustomer as $customer): ?>
                                    
                               
                                <tr>
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $customer['CustomerName']  ?></td>
                                    <td><?php echo $customer['CustomerLastName']  ?></td>
                                    <td><?php echo $customer['CustomerMobile']  ?></td>
                                    <td><?php echo $customer['CustomerAddress']  ?></td>
                                    <td><?php echo anchor('Online_Shoping_System_Controller/update_customer/'.$customer['_id'],"<span   class=' btn btn-success glyphicon glyphicon-edit'></span>");?> ||<?php echo anchor('Online_Shoping_System_Controller/delete_customer/'.$customer['_id'],"<span  class='btn btn-danger glyphicon glyphicon-trash'></span>",array('onclick'=>"return confirm('آیا شما مطمئن هستید که حذف شود؟')"));?></td>
                                </tr>
                                 <?php $i++; endforeach ?>
                                  <?php else: ?>
                        <center><h5 style="margin: 20px;width:40%" class="alert alert-warning">کدام  مشتری تا به حال ثبت نشده!</h5></center>
                    <?php endif ?>
                                 
                            </tbody>
                        </table>
                         
                    </div>

                </div>
            </div>



            
        </body>
        </html>