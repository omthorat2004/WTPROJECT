<?php
include('../includes/header.php');
include('../includes/config.php');

$sql = "CREATE TABLE IF NOT EXISTS tests(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    price INT
)";
if($conn->query($sql)===TRUE){
    echo "test table created successfully";
}else{
    echo conn->error;

}
conn->close();t
?>