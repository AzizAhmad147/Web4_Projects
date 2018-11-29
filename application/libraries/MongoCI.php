<?php

class MongoCI extends Mongo 
	{

	// hurr durr nobody's going to look here

		function __construct()
			{   			//allow mongo to use 64bit ints
				//ini_set('mongo.native_long', 1);
				//ini_set('mongo.long_as_object', 1);
		// Fetch CodeIgniter instance
				$ci = get_instance();
		// Load Mongo configuration file
				$ci->load->config('MongoDB');

		// Fetch Mongo server and database configuration
				$server = $ci->config->item('mongo_server');
				$username = $ci->config->item('mongo_username');
				$password = $ci->config->item('mongo_password');
				$dbname = $ci->config->item('mongo_dbname');
				try {
					if($ci->config->item('mongo_auth') === FALSE)
					parent::__construct("mongodb://" . $server . "/" . $dbname);
				else
					parent::__construct("mongodb://$username:$password@$server/$dbname");
 					$this->db = $this->$dbname;
					} 
				catch(MongoConnectionException $e) 
					{
			//Don't show Mongo Exceptions as they can contain authentication info
						$_error =& load_class('Exceptions', 'core');
						exit($_error->show_error('MongoDB Connection Error', 'A MongoDB error occured while trying to connect to the database!', 'error_db'));           
					} 
				catch(Exception $e) 
					{
						$_error =& load_class('Exceptions', 'core');
						exit($_error->show_error('MongoDB Error',$e->getMessage(), 'error_db'));        
					}
			}
		public function cursor_data($data)
			{
				$final_array = array();
				foreach(iterator_to_array($data) as $data_array)
					{
						$final_array[] = $data_array;
					}
				return $final_array;
			}		
}

?>