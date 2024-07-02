<?php
require_once "../modal/modal.php";

class UserController extends Modal {

    public function __construct($db_name){

        $this->db_name = $db_name;

    }


    public function insert(){

        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
        
            $this->insert("user", array('name', 'email'), array($name, $email));
        
        }

    }

    public function delete(){

        if(isset($_GET["delete"])){
            $id = $_GET["delete"];
    
            $this->delete($id, 'user');
        }

    }

    public function update(){

        $name = "";
        $email = "";
        $update = false;

        if(isset($_GET["edith"])){

            $id = $_GET["edith"];

            $this->select('user', array('id'), array($id));

            $name = $this->displaySelect('name');   
            $email = $this->displaySelect('email'); 

            $update = true;

        }

        if(isset($_POST["update"])){

            $name = $_POST['name'];
            $email = $_POST['email'];

            if(!$this->update($id, "user", array('name', 'email'), array($name, $email))){
                $msg = "<div class='alert alert-success mt-5'> record successfully deleted from database </div>";
            }else{
                $msg = "<div class='alert alert-danger mt-5'> record could not be delete from database </div>";
            }

        }

    }


}