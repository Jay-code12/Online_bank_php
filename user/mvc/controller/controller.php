<?php
include "mvc/modal/modal.php";

class Controller extends Modal {

    public String $table_name;
    public Array $table_rows = [];
    public Array $table_values = [];
    public String $order;


    //Getting user information from view
    public function insert(String $table_name, Array $table_rows, Array $table_values){

        return $this->insertData($table_name, $table_rows, $table_values);
        
    }

    
    //updating data in database
    public function update(int $id, String $table_name, Array $table_rows, Array $table_values){

        return $this->updateData($id, $table_name, $table_rows, $table_values);

    }

    //deleting data from the database
    public function delete($id, $table){

        return $this->deleteData($id, $table);

    }

    //querying data from the database
    public function select(String $table_name, Array $table_rows, Array $table_values){

        $this->table_name = $table_name;
        $this->table_rows = $table_rows;
        $this->table_values = $table_values;

        // return $this->selectData($table_name, $table_rows, $table_values);

    }

    //querying data from the database
    public function displaySelect(String $table_row_display){

        return $this->selectData($table_row_display,  $this->table_name, $this->table_rows, $this->table_values);

    }

    //querying data from the database
    public function displayAll_select(String $table_name, Array $table_rows, Array $table_values, String $order){

        return $this->fetchAllData($table_name, $table_rows, $table_values, $order);

    }


}