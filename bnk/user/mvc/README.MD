
PHP HOW TO OPERATE CRUD QUERY 

$query = new Controller();

/*

PHP INSERTING DATE INTO DATABASE
$query->insert(String table_name, Array table_rows_name(), Array table_rows_value());


*/

/*

PHP UPDATE DATA IN DATABASE
$query->update(Int table_id, String table_name, Array table_rows(), Array table_rows_value());


*/

/*

PHP DELETE USER DATA FROM DATABASE
$query->delete(Int table_id, String table_name);

*/

/*

PHP SELECT USER DATA FROM DATABASE
$query->select(String table_name, Array table_rows_name, Array table_values)
echo  $query->displaySelect(String table_rows_name);

*/

/*

PHP SELECT ALL DATA FROM DATABASE

$data = $query->displayAll_select(String table_name, Array table_rows_name, Array table_values, String order);

foreach($data_post as $post){
    echo $post[String table_name]
}

*/











PHP MAILING OOP  

$mail = new Mail();

/*

PHP SENDING MAIL
$mail->send_mail(String to_email, String subject, String email_msg);


*/