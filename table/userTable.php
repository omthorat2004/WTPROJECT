<?php
include('../includes/config.php');

$sql = 'CREATE TABLE IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(55),
    email VARCHAR(55),
    password VARCHAR(55),
    address TEXT,
    about_me TEXT,
    contact_no1 INT(12),
    contact_no2 INT(12),
    photoUrl TEXT,
    date_of_birth DATE
)';
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error while creating table: " . $conn->error;
}

$conn->close();

?>
