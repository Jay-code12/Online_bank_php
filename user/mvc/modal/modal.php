<?php
require_once "mvc/migration/connect.php";

class Modal extends Database {

    public $update_array = [];


    // Insert a row/s in a Database Table
    protected function insertData(String $table_name, Array $table_rows, Array $table_values){

        for($i = 0; count($table_rows) > $i; $i++){

            $update_array_rows[$i] = "`$table_rows[$i]`";
            $update_array_values[$i] = "'$table_values[$i]'";

        }

        $sql = "INSERT INTO `$table_name`(`id`,". implode(", ", $update_array_rows) .") VALUES (NULL,". implode(", ", $update_array_values) .")";        
        $query = $this->connect()->prepare($sql);

        $query->execute();
 
    }

    //selecting data from database
    protected function selectData(String $table_row_display, String $table_name, Array $table_rows, Array $table_values){

        for($i = 0; count($table_rows) > $i; $i++){
            
            $update_array[$i] ="$table_rows[$i]='$table_values[$i]'";

        }

        $sql = "SELECT * FROM $table_name WHERE ".implode(" AND ", $update_array) ."";
        $query = $this->connect()->query($sql);

        $query->execute();
        $res = $query->fetch();

        return $res[$table_row_display];

    }


    //selecting data from database
    protected function fetchAllData(String $table_name, Array $table_rows, Array $table_values, String $order){

        $array = array();  

        if(count($table_rows) == 0){

            for($i = 0; count($table_rows) == $i; $i++){          
                $update_array[$i] = 1;
            }

        }else{
                   
            for($i = 0; count($table_rows) > $i; $i++){
                $update_array[$i] ="$table_rows[$i]='$table_values[$i]'";
            }

        }

        $sql = "SELECT * FROM $table_name WHERE ".implode(" AND ", $update_array) ." $order";  
        $query = $this->connect()->query($sql); 

        while ($row = $query->fetch()) {
            $array[] = $row;  
        } 

        return $array;


    }


    //selecting data from database
    protected function updateData(int $id, String $table_name, Array $table_rows, Array $table_values){

        for($i = 0; count($table_rows) > $i; $i++){
            
            $update_array[$i] ="`$table_rows[$i]`='$table_values[$i]'";

        }

        $sql = "UPDATE `$table_name` SET ". implode(", ", $update_array) ." WHERE id=$id";
        $query = $this->connect()->prepare($sql);

        $query->execute();

    }


    //selecting data from database
    protected function deleteData(int $id, String $table_name){

        $sql = "DELETE FROM `$table_name` WHERE id=$id";
        $query = $this->connect()->prepare($sql);

        $query->execute();

    }


}
