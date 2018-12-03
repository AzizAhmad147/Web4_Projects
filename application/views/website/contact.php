

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<?php echo form_open('Website_Controller/create_massage',['name'=>'signup']);?>
						<h4 class="m-text26 p-b-36 p-t-15">
							پیام خودرا ارسال کنید
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							
							<?php echo form_input(['name'=>'fname','id'=>'fullname','placeholder'=>'Enter your full name','class'=>'form-control']);?>
                             <?php echo form_error('fname','<div style="color:red">', '</div>'); ?>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<?php echo form_input(['name'=>'mobile','id'=>'fullname','placeholder'=>'Enter your full name','class'=>'form-control']);?>
                             <?php echo form_error('mobile','<div style="color:red">', '</div>'); ?>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<?php echo form_input(['name'=>'email','id'=>'fullname','placeholder'=>'Enter your full name','class'=>'form-control']);?>
                            <?php echo form_error('email','<div style="color:red">', '</div>'); ?>
						</div>
                         <div class="bo4 of-hidden size15 m-b-20">
						<?php echo form_textarea(['name'=>'SMS','rows'=>'5','cols'=>'10','id'=>'address','class'=>'form-control','placeholder'=>'Enter your address']);?>
					</div>

						<div class="w-size25">
							<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-custom btn-lg btn-block']);?>
               
							
						</div>
					 <?php echo form_close();?>
				</div>
			</div>
		</div>
	</section>





	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
