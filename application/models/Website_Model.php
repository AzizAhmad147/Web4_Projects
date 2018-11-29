
<?php
class Website_Model extends  CI_Model{
			public function __construct()
		{
			parent::__construct();
			$this->load->library('MongoCI');
		}


	function new_message($save){

		   $query = $this->mongoci->db->Messages->insert($save);
           if($query=='1')
		   {
			   echo "موفقانه ثبت شد!";
		   }
		
	}

	


		
}