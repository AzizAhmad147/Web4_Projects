                             
<body>
                             <form class="form-horizontal form-label-left" method="POST"  action="http://localhost/Web4_Projects/index.php/Online_Shoping_System_Controller/save_customer/<?php echo $UpdateCustomer[0]['_id']; ?>" >

                                           <div class="form-group">
                                          <label>نام</label>
                                              <input type="text" class="form-control" name="fname" required value="<?php echo $UpdateCustomer[0]['CustomerName']; ?>" >
                                            </div>

                                     <div class="form-group">
                                     <label>نام فامیلی</label>
                                  <input type="text" class="form-control" name="lname" required value="<?php echo $UpdateCustomer[0]['CustomerLastName']; ?>">
                                 </div>

                                     <div class="form-group">
                                     <label>مبایل</label>
                                  <input type="number" class="form-control" name="phone" required value="<?php echo $UpdateCustomer[0]['CustomerMobile']; ?>">
                                 </div>
                                     <div class="form-group">
                                     <label>آدرس</label>
                                  <textarea class="form-control" name="address" required >
                                    <?php echo $UpdateCustomer[0]['CustomerAddress']; ?>
                                    </textarea>
                                 </div>
                                    
          <div class="modal-footer">
 <button id="send" type="submit"  class=" btn btn-success">ذخیره تغییرات</button>
                                    <a  href="read_user"  class=" btn btn-success">لیست کابر ها</a>
          </div>
                                        

                                    </form>
                                    </body>