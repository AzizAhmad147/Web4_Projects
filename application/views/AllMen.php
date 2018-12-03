<!DOCTYPE html>
<html>
<head>
  
</head>


<body>


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>لیست تمام کالای مردانه
                
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
                                <?php if (count($mens)): ?>
                                  
                                <?php
                                  
                                $i=1; foreach ($mens as $men): ?>

                                    
                               
                                <tr>
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $men['Category']  ?></td>
                                    <td><?php echo $men['Tilte']  ?></td>
                                    <td><?php echo $men['Price']  ?></td>
                                    <td><?php echo $men['Description']  ?></td>
                                    
                                    <td><img width="50" class="img-rounded" src=<?php echo base_url("uploads/"). $men['Image']  ?> alt="عکس پیدا نشد"></td>

                                    
                                   <td>  <?php echo anchor('Online_Shoping_System_Controller/update_user/'.$men['_id'],"<span   class=' btn btn-success glyphicon glyphicon-edit'></span>");?>  ||<?php echo anchor('Online_Shoping_System_Controller/delete_men/'.$men['_id'],"<span  class='btn btn-danger glyphicon glyphicon-trash'></span>",array('onclick'=>"return confirm('آیا شما مطمئن هستید که حذف شود؟')"));?></td>
                                </tr>
                                 <?php $i++; endforeach ?>
                                                     <?php else: ?>
                        <center><h5 style="margin: 20px;width:40%" class="alert alert-warning">کدام کالای تا به حال ثبت نشده!</h5></center>
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
<script type = "text/javascript">
  $(document).ready(function(){
    
    //Delete
   /* $('.del_item_id').on('click', function(){
      $item_id = $(this).attr('name');
      $('.del_item').on('click', function(){
        window.location = "delete_item.php?item_id=" + $item_id;
      });
    });*/
    
    //Update
    $('.update_item_id').on('click', function(){
      $item_id = $(this).attr('name');
      
      $('.update').load('UpdateUser.php?item_id=' +$item_id);
    });
  });
</script>


            
        </body>
        </html>