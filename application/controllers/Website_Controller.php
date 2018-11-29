<?php

class Website_Controller extends CI_Controller{
         	public function __construct()
	{
	   parent::__construct();
	    //helpers
	 //  $this->load->helper('url');
	   $this->load->helper(array('form', 'url'));

	  $this->load->model('Website_Model');
	}


    function index(){
		$this->load->view('website/index');

    }
    function create_massage(){
    	$this->load->library('form_validation');
		$config= array(
			array(
			'field'=>'fname',
			'label'=>'نام خودرا بنویسید!',
			'rules'=>'required'
			),
			array(
			'field'=>'mobile',
			'label'=>'شماره تلفن خودرا بنویسید!',
			'rules'=>'required'
			),
		array(
			'field'=>'email',
			'label'=>'ایمیل خودرا بنویسید!',
			'rules'=>'required'
			),
		array(
			'field'=>'SMS',
			'label'=>'پیام خودرا بنویسید!',
			'rules'=>'required'
			)
		
		);
		
		
		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
			$this->create_massage();
		}else{
    	        $save['Name'] = $this->input->post('name');
                $save['Phone'] = $this->input->post('phone-number');
                $save['Email'] = $this->input->post('email');
                $save['Massage'] = $this->input->post('message');
                $this->Website_Model->new_message($save);
     }
    }
  

    

}
