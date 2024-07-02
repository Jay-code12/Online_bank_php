<?php
require_once "connect.php";

class CreateDb extends Database {



    // creating  Database Table
    public function create_db(String $db){
    
        if ($this->connect($db)) {
            echo "Database exists successfully";
        }else {

            // sql to create table
            $sql = "CREATE DATABASE $db";

            if ($this->connect("mvc")->query($sql)) {
                echo "Database $db created already";
            } else {
                echo "Error creating table: " . $this->connect("mvc")->error;
            }

        }


    }



    // creating  Database Table
    public function create_db_tables(String $db_tables_name, Array $table_rows_name){

        for($i = 0; count($table_rows_name) > $i; $i++){

            $update_array_rows[$i] = "$table_rows_name[$i] VARCHAR(255) NOT NULL";

        }

        // sql to create table
        $sql = "CREATE TABLE $db_tables_name (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            ". implode(", ", $update_array_rows) .",
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
        if ($this->connect("mvc")->query($sql)) {
            echo "Table $db_tables_name created successfully";
        } else {
            echo "Error creating table: " . $this->connect("mvc")->error;
        }

    }


}