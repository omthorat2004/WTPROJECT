<?php 
    include('includes/header.php');
    include('includes/config.php');
    if(!isset($_SESSION['admin_login'])){
        header('Location:adminLogin.php');
        exit();
    }
?>
<div class='flex flex-col d-flex'>
    <?php
    include('./adminNavbar.php');
    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Ser No.</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Test Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="action">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM appointments WHERE accepted=1 AND completed=0";
    $result = $conn->query($sql);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['appointment_id'];
        $query = "UPDATE appointments SET completed=1 WHERE id=$id";
        if($conn->query($query)===TRUE){
            header('Location: adminHome.php');
            exit();
        }else{
            echo conn->error;
        }
    }
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        $user_id = $row['user_id']; // Retrieve user_id from $row
        $select = "SELECT name FROM users WHERE id = $user_id"; // Corrected SQL query
        $user_result = $conn->query($select);
        if($user_result) {
            $user_row = $user_result->fetch_assoc();
        }
        echo "<td>".$row['id']."</td>";
        echo "<td >".$user_row['id']."</td>"; 
        echo "<td >".$row['name']."</td>";
        echo "<td >".$row['appointment_date']."</td>";
        echo "<td >".$row['appointment_time']."</td>";
        echo "<td>
                    <form action='adminHome.php' method='post'>
                        <input type='hidden' name='appointment_id' value='" . $row['id'] . "'/> <!-- Corrected variable name -->
                        <button type='submit' name='accept' class='btn btn-primary'>Accept</button>
                    </form>
                  </td>";
        echo "</tr>";
    }
    ?>
    <tr>
      <th scope="row">1</th>
      <td>Om Thorat</td>
      <td>Blood Test</td>
      <td>29/04/2024</td>
      <td>10:30</td>
      <td>
        <form action='adminAdminAccepted.php' method='post'>
            <input type='hidden' name='apppointment_id' value='appointment_id'/>
            <button class='btn btn-primary'>Completed</button>
        </form>
      </td>
    </tr>
    
    
  </tbody>
</table>
</div>