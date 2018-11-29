<?php

class home extends  CI_Controller{
    function index(){
        echo "<h3 style='color:#0298d9;font-family:Monotype Corsiva'>welcome AzizAhmad to codecnigter!</h3>";
        $this->myfunction();
    }
    function myfunction()
    {
        echo "<h3 style='color:#0298d9;font-family:Monotype Corsiva'>welcome AzizAhmad to codecnigter! this is my function</h3>";

    }
    function  Show_Contact(){
        $ContactData['Name']='AzizAhmad';
        $ContactData['LastName']='Sadeqi';
        $ContactData['Number']='0799707070';
        $this->load->view('Contact',$ContactData);


    }
    function  Contact_List(){
        $this->load->model('Contact');
        $data['contact']=$this->Contact->List_Number();
        $this->load->view('mycontact',$data);
    }
}




