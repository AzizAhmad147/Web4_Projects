<?php
class Student_List extends  CI_Model{
    function  All_Student(){
        $sql=$this->mono_db->get('students');
        return $sql->result();

    }
    function new_student($data){
    	$this->db->insert('students',$data);

    }
        function  get_student($id){
        	$this->db->where('Id',$id);
        $sql=$this->db->get('students');
        return $sql->row();

    }
    function saveschange($id,$data){
    	$this->db->where('Id',$id);
    	$this->db->update('students',$data);

    }
        function delete($id){
    	$this->db->where('Id',$id);
    	$this->db->delete('students');

    }
    function new_category($data){
        $this->db->insert('student_category',$data);

    }

        function  All_Category(){
        $sql=$this->db->get('student_category');
        return $sql->result();

    }
            function  get_category($id){
            $this->db->where('Id',$id);
        $sql=$this->db->get('student_category');
        return $sql->row();

    }
        function create_new_category($id,$data){
        $this->db->where('Id',$id);
        $this->db->update('student_category',$data);

    }
            function deletecategory($id){
        $this->db->where('Id',$id);
        $this->db->delete('student_category');

    }
}
