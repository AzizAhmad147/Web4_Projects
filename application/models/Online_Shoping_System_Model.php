
<?php
class Online_Shoping_System_Model extends  CI_Model{
			public function __construct()
		{
			parent::__construct();
			$this->load->library('MongoCI');
		}
		function user_login($uname,$pass){
	
		$where =array('UserName'=>$uname,'Password'=>$pass );
		$query=$this->mongoci->db->Users->find($where);
		return $this->mongo_cursor($query);
		
	}
		function get_user_login($id){

		$where =array('Mobile'=>$id );
		$query=$this->mongoci->db->Users->find($where);
		return $this->mongo_cursor($query);


	}


	function new_category($save){

		   $query = $this->mongoci->db->Category->insert($save);
           return $query;
		
	}

	

		public function new_customer($data)
	{ 
		return $query = $this->mongoci->db->Customers->insert($data);

	  
	}
			public function get_customer()

		{
			$query = $this->mongoci->db->Customers->find();
            return $this->mongo_cursor($query);
		}
			function MenCount(){

	       return $this->mongoci->db->Items->count();

	     

	}
		function CatCount(){

	       return $this->mongoci->db->Category->count();

	     

	}
		public function mongo_cursor($cursor)  // iterator to cursor and return array 
		{
			$data=array();
			foreach($cursor as $user_data)
			{
			  $data[]=$user_data;
			}
			return $data;

		}
		public function get_category2($x,$y)
		{
			   

			$query = $this->mongoci->db->Category->find()->limit($x)->skip($y);

            return $this->mongo_cursor($query);
		}
			public function remove_category($id)
		{
			$where = array('_id'=> new MongoId($id));
			$this->mongoci->db->Category->remove($where);				
		}

				public function remove_customer($id)
		{
			$where = array('_id'=> new MongoId($id));
			$this->mongoci->db->Customers->remove($where);				
		}

				public function get_update_customer($id)
		{
			$query = $this->mongoci->db->Customers->find(array('_id'=>new MongoId($id)));
			return $this->mongo_cursor($query);
		}
			function save_change($id,$data){
			$where =array('_id'=>new MongoId($id));
			return $this->mongoci->db->Customers->update($where,$data);
	}

		
	public function get_category()
		{
			$query = $this->mongoci->db->Category->find();
            return $this->mongo_cursor($query);
		}
		function new_subcategory($save){

		   $query = $this->mongoci->db->Subcategory->insert($save);
           if($query=='1')
		   {
			   echo "موفقانه ثبت شد!";
		   }
		   function read_subcategory($id){
		   	$where = array('CatId',$id);
		   	$read=$this->mongoci->db->Subcategory->find($where);
		   	return $this->mongo_cursor($read);

		   }
		
	}
	function new_item($save){

		   $query = $this->mongoci->db->Items->insert($save);
		   return $query;
           
		   }

		   public function remove_item($id)
		{
			$where = array('_id'=> new MongoId($id));
			$this->mongoci->db->Mens->remove($where);				
		}
		   function new_women($save){

		   $query = $this->mongoci->db->Womens->insert($save);
		   return $query;
           
		   }
		   public function get_women($x,$y)
		{

       
			$query = $this->mongoci->db->Items->find()->limit($x)->skip($y);

            return $this->mongo_cursor($query);
		}

		   			function WomenCount(){

	       return $this->mongoci->db->Items->count();

	     

	}
		

      public function get_children($x,$y)
		{

         
			$query = $this->mongoci->db->Items->find()->limit($x)->skip($y);

            return $this->mongo_cursor($query);
		}
		
		   			function ChildrenCount(){

	       return $this->mongoci->db->Items->count();

	     

	}




		   		public function get_men($x,$y)
		{
           
			$query = $this->mongoci->db->Items->find()->limit($x)->skip($y);

            return $this->mongo_cursor($query);
		}
		
		
	
		function new_user($save){

		   $query = $this->mongoci->db->Users->insert($save);
           if($query=='1')
		   {
			   echo "موفقانه ثبت شد!";
		   }
		
	}

		
		public function get_user()
		{
			$query = $this->mongoci->db->Users->find()->sort( array('Name' =>-1  ));
            return $this->mongo_cursor($query);
		}
		public function remove_user($id)
		{
			$where = array('_id'=> new MongoId($id));
			$this->mongoci->db->Users->remove($where);				
		}
		public function get_update_user($id)
		{
			$query = $this->mongoci->db->Users->find(array('_id'=>new MongoId($id)));
			return $this->mongo_cursor($query);
		}
		

		public function save_user($id,$save)
		{


			$where =array('_id'=>new MongoId($id));
			
			return $this->mongoci->db->Users->update($where,$save);
			

		}

		public function get_subcategory($Id){
		
		$query=$this->mongoci->db->get_where('Subcategory',array('CatId'=>$Id));
		return $query->result();

	}
	function get_info(){
		$query = $this->mongoci->db->Mens->find();
		return $this->mongo_cursor($query);
	}
	function searchbyname($name){
		$where = array('Tilte'=> LIKE ('$name%'));
		$query = $this->mongoci->db->Mens->find("$where");
		return $this->mongo_cursor($query);
	}

		
}