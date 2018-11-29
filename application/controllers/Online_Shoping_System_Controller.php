<?php

class Online_Shoping_System_Controller extends CI_Controller{
         	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	  $this->load->model('Online_Shoping_System_Model');
      $this->load->library('session');
	}


    function index(){
		$this->load->view('Online_Shoping_System_View');

    }
  

    function logout(){
        $this->session->sess_destroy();
        $this->load->view('Login');
    }
    function login(){
        $uname = $this->input->post('uname');
        $pass= $this->input->post('pass');
        $user= $this->Online_Shoping_System_Model->user_login($uname,$pass);
        if(!$user){
        echo "<script>alert('یوزر موجود نیست');</script>";
         $this->logout();
        }else{
            $this->session->set_userdata('login',true);
            $this->session->set_userdata('Mobile',$user->Mobile);

            redirect('Online_Shoping_System_Controller/dashboard1');
            
        }
    }
    function dashboard1(){
        $this->session->set_userdata('last_visited',current_url());
        if($this->session->has_userdata('Mobile')){
            $id=$this->session->userdata('Mobile');
            $data['user_login']=$this->Online_Shoping_System_Model->get_user_login($id);
           

        }
        $data['page']='dashboard1';
               
        $this->_main($data); 
        

        
    }


	function create_category(){
        $save = $this->input->post(); 
        $this->Online_Shoping_System_Model->new_category($save);
    
	}	
	
	public function create_customer()
	{
		$data = array(
				'CustomerName' => $this->input->post('fname'),
				'CustomerLastName' => $this->input->post('lname'),
				'CustomerMobile' => $this->input->post('phone'),
				'CustomerAddress' => $this->input->post('address'),
			);
		$insert = $this->Online_Shoping_System_Model->new_customer($data);
		echo json_encode(array("status" => TRUE));
	}
	
		public function read_customer()
	{
		
		$con['allcustomer'] = $this->Online_Shoping_System_Model->get_customer();
		$con['page']="AllCustomer";
		$this->_main($con);

	}
			public function delete_customer($id)
	{
	   $this->Online_Shoping_System_Model->remove_customer($id);
	   $this->read_customer();
	}
	public function update_customer($id)
	{
		$read['UpdateCustomer'] = $this->Online_Shoping_System_Model->get_update_customer($id);
		
		$read['page']="UpdateCustomer";
		$this->_main($read);
		//$this->load->view('Online_Shoping_System_View',$data);
		
		
	}
		function save_customer($id){
				$data['CustomerName'] =$this->input->post('fname');
				$data['CustomerLastName'] = $this->input->post('lname');
				$data['CustomerMobile'] = $this->input->post('phone');
				$data['CustomerAddress'] = $this->input->post('address');
		$this->Online_Shoping_System_Model->save_change($id,$data);
		//redirect('posts/get_posts');
	}

		public function read_category()
	{
		$read['Category'] = $this->Online_Shoping_System_Model->get_category();
		$read['page']="AddItem";
		$this->_main($read);
		
		
		
	}
	function create_subcategory(){
    $save = $this->input->post(); 
     $this->Online_Shoping_System_Model->new_subcategory($save);
    
	}


	function additem(){
		$read['Category'] = $this->Online_Shoping_System_Model->get_category();
		$read['page']="AddItem";
		$this->_main($read);


	}
	
			public function create_item()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']        = time();
                $config['max_size']             = 5000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1200;

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('image'))
                {
                $save['Category'] = $this->input->post('cat');
                
                $save['Image'] = $this->upload->data('file_name');
                $save['Tilte'] = $this->input->post('title');
                $save['Price'] = $this->input->post('price');
                $save['Description'] = $this->input->post('desc');
             
                $this->Online_Shoping_System_Model->new_item($save);
                

                }else
                {
                	echo "no uploaded";
                }
                $this->read_men();
                 }

              public function read_men()
	{
		        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/Web4_Projects/index.php/Online_Shoping_System_Controller/read_men';
        $config['total_rows'] = $this->Online_Shoping_System_Model->MenCount();
        $config['per_page'] =2;
        $config['uri_segment'] =3;
        $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'اولی';
        $config['last_link'] = 'آخری';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'قبلی';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'بعدی';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(فعلی)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3));
        $this->pagination->initialize($config);
        $read['link'] = $this->pagination->create_links();
		$read['mens'] = $this->Online_Shoping_System_Model->get_men($config['per_page'], $page);
		//print_r($read['mens']);
		$read['page']="AllMen";
		$this->_main($read);
		
	}

        public function delete_men($id)
    {
       $this->Online_Shoping_System_Model->remove_men($id);
       redirect('Online_Shoping_System_Controller/read_men');
    }
		function addwomen(){
		$read['Category'] = $this->Online_Shoping_System_Model->get_category();
		$read['page']="AddWomen";
		$this->_main($read);


	}
	public function create_women()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']        = time();
                $config['max_size']             = 5000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('image'))
                {
                $save['Category'] = $this->input->post('cat');
                $save['Subcategory'] = $this->input->post('subcat');
                $save['Image'] = $this->upload->data('file_name');
                $save['Tilte'] = $this->input->post('title');
                $save['Price'] = $this->input->post('price');
                $save['Description'] = $this->input->post('desc');
             
                $this->Online_Shoping_System_Model->new_women($save);
                $this->read_women();

                

                }else
                {
                	echo "no uploaded";
                }
                 }
             
              public function read_women()
	{
		        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/Web4_Projects/index.php/Online_Shoping_System_Controller/read_women';
        $config['total_rows'] = $this->Online_Shoping_System_Model->WomenCount();
        $config['per_page'] =2;
        $config['uri_segment'] =3;
        $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'اولی';
        $config['last_link'] = 'آخری';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'قبلی';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'بعدی';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(فعلی)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3));
        $this->pagination->initialize($config);
        $read['link'] = $this->pagination->create_links();
		$read['womens'] = $this->Online_Shoping_System_Model->get_women($config['per_page'], $page);
		
		$read['page']="AllWomen";
		$this->_main($read);
		
	}




	function addchildren(){
		$read['Category'] = $this->Online_Shoping_System_Model->get_category();
		$read['page']="AddChildren";
		$this->_main($read);


	}
	public function create_chaildren()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']        = time();
                $config['max_size']             = 5000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('image'))
                {
                $save['Category'] = $this->input->post('cat');
                $save['Subcategory'] = $this->input->post('subcat');
                $save['Image'] = $this->upload->data('file_name');
                $save['Tilte'] = $this->input->post('title');
                $save['Price'] = $this->input->post('price');
                $save['Description'] = $this->input->post('desc');
             
                $this->Online_Shoping_System_Model->new_chaildren($save);
                $this->read_children();

                }else
                {
                	echo "no uploaded";
                }
                 }
                
                public function read_children()
	{
		        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/Web4_Projects/index.php/Online_Shoping_System_Controller/read_children';
        $config['total_rows'] = $this->Online_Shoping_System_Model->ChildrenCount();
        $config['per_page'] =2;
        $config['uri_segment'] =3;
        $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'اولی';
        $config['last_link'] = 'آخری';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'قبلی';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'بعدی';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(فعلی)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3));
        $this->pagination->initialize($config);
        $read['link'] = $this->pagination->create_links();
		$read['childrens'] = $this->Online_Shoping_System_Model->get_children($config['per_page'], $page);
		
		$read['page']="AllChildren";
		$this->_main($read);

		
	}
       
        public function create_user()

        {

                $config['upload_path']          = 'uploads/UserImage/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = time();
                $config['max_size']             = 5000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;
                           

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('Image'))
                {
          
                $save['Name'] = $this->input->post('name');
                $save['LastName'] = $this->input->post('lname');
                $save['Image'] = $this->upload->data('file_name');
                $save['Mobile'] = $this->input->post('phone');
                $save['Email'] = $this->input->post('email');
                $save['UserName'] = $this->input->post('uname');
                $save['Password'] = $this->input->post('pwd');
                $this->Online_Shoping_System_Model->new_user($save);
               

                

		     
                

                }
                
        }

	/*function check_user(){
		$uname = $this->input->post('UserName');
		$pass= $this->input->post('Password');
		$user= $this->user_model->user_login($uname,$pass);
		if($user){
			//$this->session->sess_destroy();
			$this->session->set_userdata('check_user',true);
			$this->session->set_userdata('user',$user->UserId);
			print_r($this->session->userdata());
			
		}
		else {
			$this->load->view('Online_Shoping_System_View');
			//$this->check_user();
		}
	}*/


	public function add_user()
	{
		$show['page']="AddUser";
		$this->_main($show);
		}
	public function read_user()
	{

		$read['alluser'] = $this->Online_Shoping_System_Model->get_user();
		$read['page']="AllUser";
		$this->_main($read);


		//$this->load->view('AllUser',$read);

	}
	function  _main($data){
		$data['Category'] = $this->Online_Shoping_System_Model->get_category();
		$this->load->view('Online_Shoping_System_View',$data);

	}

		public function delete_user($id)
	{
	   $this->Online_Shoping_System_Model->remove_user($id);
	   redirect('Online_Shoping_System_Controller/read_user?con=users');
	}

	public function update_user($id)
	{
		$read['UpdateUser'] = $this->Online_Shoping_System_Model->get_update_user($id);
	
		$read['page']="UpdateUser";
		$this->_main($read);
	
		
		
	}
	function save_update($id){
		$config['upload_path']          = 'uploads/UserImage/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = time();
                $config['max_size']             = 5000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;
                           

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('Image'))
                {
          
                $save['Name'] = $this->input->post('name');
                $save['LastName'] = $this->input->post('lname');
                $save['Image'] = $this->upload->data('file_name');
                $save['Mobile'] = $this->input->post('phone');
                $save['Email'] = $this->input->post('email');
                $save['UserName'] = $this->input->post('uname');
                $save['Password'] = $this->input->post('pwd');
		       $this->Online_Shoping_System_Model->save_user($id,$save);
		       $this->read_user();
		}
		
		}
        function MSearch(){
        $read['page']="SearchMen";
        $this->_main($read);


    }
    function display_info(){
  
        
        $data['results'] = $this->Online_Shoping_System_Model->get_info();
        
        $this->load->view('view_info', $data);
    }
    function search_name(){
        if(isset($_GET['name'])){
            $name=$_GET['name'];
        }
     
        
        $data['results'] = $this->Online_Shoping_System_Model->searchbyname($name);
        
        $this->load->view('view_info', $data);
    }

}
