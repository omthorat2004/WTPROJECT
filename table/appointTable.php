<?php
include('../includes/config.php');

$sql = "CREATE TABLE IF NOT EXISTS appointment_table (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    appointment_date DATE,
    appointment_time TIME,
    user_id INT,
    test_id INT,
    accepted BOOLEAN,
    completed BOOLEAN
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo $conn->error; // Added $ before conn
}

$conn->close();
?>
