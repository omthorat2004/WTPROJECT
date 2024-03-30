<?php
include('includes/config.php');
include('includes/header.php');
if(!isset($_SESSION['admin_login'])){
    header('Location :adminLogin.php');
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $test_name = $_POST['test_name'];
    $test_price = $_POST['test_price'];
    $sql = "INSERT INTO tests (name,price) VALUES ('$test_name',$test_price)";
    if($conn->query($sql)===TRUE){
        echo "test added";
    }
}

?>
<div class='flex justify-center items-center h-screen'>
    <form action='testForm.php' method='post'>
    <div class='flex flex-col items-center'>
        <h3 class='text-primary text-center'>Test Info</h3>
        <input class='input-field' type='text' name='test_name' placeholder='Enter test Name'/>
        <input class='input-field' type='number' name='test_price' placeholder='Enter test Price'/>
        <button class='btn btn-primary input-field' type='submit'>Submit</button>
        <a href='./adminHome.php' class='link text-primary'>Go to Admin Home</a>
    </div>
    </form>
</div>