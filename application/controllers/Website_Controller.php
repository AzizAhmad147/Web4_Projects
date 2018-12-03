<?php

class Website_Controller extends CI_Controller{
         	public function __construct()
	{
	   parent::__construct();
	    //helpers
	 //  $this->load->helper('url');
	   $this->load->helper(array('form', 'url'));

	  $this->load->model('Website_Model');
	  $this->load->library('form_validation');
	}


    function index(){
		$this->load->view('website/index');

    }
    function create_massage(){
    	
    	$this->form_validation->set_rules('fname','Full Name','required|alpha');
    	$this->form_validation->set_rules('mobile','Phone Number','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('email','Email id','required|valid_email');
        $this->form_validation->set_rules('SMS','Full Name','required|alpha');
        
      
        if($this->form_validation->run()){
     	        
		        $save['Name'] = $this->input->post('name');
                $save['Phone'] = $this->input->post('phone-number');
                $save['Email'] = $this->input->post('email');
                $save['Massage'] = $this->input->post('message');
                $this->Website_Model->new_message($save);
}
else{
 echo "no validate";
}

     
    }
  

    

}
