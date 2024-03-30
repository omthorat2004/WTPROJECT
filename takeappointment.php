<?php
    include('./includes/header.php');
    include('./includes/config.php');
    include('./includes/navbar.php');
    if(isset($_POST['submit'])){
        // $reg_date = $_POST['date'];
        // $reg_time = $_POST['time'];
        // $id=$_GET['id'];
        // $select = "SELECT * FROM testTable WHERE id=$id";
        // $result = $conn->query($select);
        // $row = $result->fetch_assoc();
        // $sql = "INSERT INTO appointments (appointment_date ,appointment_time,user_id,test_id) VALUES ('$reg_date','$reg_time',$_SESSION['user_id'],$id)";
        // if($conn->query($sql)===TRUE){
        //     header('Location :index.php');
        // }else{
        //     echo conn->error;
        // }
    }else{

    }
?>

<div class="flex justify-content-center">
   
<form action='' method='post'>
  <div class="form-group mt-5" style='width:350px'>
    <label for="exampleInputEmail1">Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='date' placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Time</label>
    <input type="time" class="form-control" id="exampleInputPassword1" name='time' placeholder="Password" required>
  </div>
  <div class='d-grid'>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>
</form>

</div>