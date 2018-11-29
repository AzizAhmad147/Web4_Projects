<!DOCTYPE html>
<html>
<head>
  
</head>


<body>


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>لیست تمام کالای زنانه
                
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
                                <th>کتگوری</th>
                                <th>عنوان</th>
                                <th>قیمت</th>
                                <th>تشریعات</th>
                                <th>عکس</th>
                                <th>تغییرات</th>
                   

                                
                            </tr>
                            </thead>


                            <tbody>
                                <?php if (count($womens)): ?>
                                <?php
                                  
                                $i=1; foreach ($womens as $women): ?>
                                    
                               
                                <tr>
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $women['Category']  ?></td>
                                    <td><?php echo $women['Tilte']  ?></td>
                                    <td><?php echo $women['Price']  ?></td>
                                    <td><?php echo $women['Description']  ?></td>
                                    
                                    <td><img width="50" class="img-rounded" src=<?php echo base_url("uploads/"). $women['Image']  ?> alt="عکس پیدا نشد"></td>

                                    
                                   <td>  <?php echo anchor('Online_Shoping_System_Controller/update_user/'.$women['_id'],"<span   class=' btn btn-success glyphicon glyphicon-edit'></span>");?>  ||<?php echo anchor('Online_Shoping_System_Controller/delete_user/'.$women['_id'],"<span  class='btn btn-danger glyphicon glyphicon-trash'></span>",array('onclick'=>"return confirm('آیا شما مطمئن هستید که حذف شود؟')"));?></td>
                                </tr>
                                 <?php $i++; endforeach ?>
                                                     <?php else: ?>
                        <center><p style="margin: 20px;">کدام کالای اضاف نشده است</p></center>
                    <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo $link ?>

                </div>
            </div>

            <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 class = "text-success modal-title">Update Item</h3>
    </div>
    <form method = "POST" action = "update_item_query.php">
    <div class="modal-body update">
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" name = "update"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


            
        </body>
        </html>