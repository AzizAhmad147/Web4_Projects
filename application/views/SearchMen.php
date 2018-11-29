<style type="text/css">
    #search_table{
    width:600px;
    height:500px;
    border:1px solid #CCC;
    overflow:scroll;
    overflow-x:hidden;
}
table {
    overflow:hidden;
    margin-top:10px;
}
table th{
    padding-left:5px;
    background-color:#999;
    color:#FFF;
    text-align:center;
    font-weight:bold;
}
table td{
    padding:3px;
    text-align:center;
    border:1px solid #CCC;
    border-radius:2px;
}
</style>
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
                        <div class="search_form">
            <?php
                $name = array('id' => 'my_form', 'name' => 'form1');
                echo form_open('Online_Shoping_System_Controller/search_name', $name);
            ?>
            <table>
            <?php
                echo "Search name: </br>";
                echo form_input('fname', set_value('fname'),'onkeyup="searchName();"');
            ?>
                    <tr>
                        <th width="175">First Name</th>
                        <th width="175">Last Name</th>
                        <th width="226">Address</th>
                    </tr>
            </table>
           <?php echo form_close(); ?>
            <div id="search_table"></div>
        </div>

                   
                    </div>
                </div>
            </div>
    </div>
<!-- /page content -->
<script>

</script>
   

</body>