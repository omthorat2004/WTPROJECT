<?php

include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');

$sql = ""
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Ser No.</th>
      <th scope="col">Test Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
  $sql = "SELECT * FROM tests";
  $result = $conn->query($sql);
  if($result){

    while($row=$result->fetch_assoc()){
      echo "<tr/>";
      echo "<th scope='row'>".$row['id']."</th>";
      echo "<td>".$row['name']."</td>";
      echo  "<td>".$row['price']."</td>";
      echo "<td><a href='./takeappointment.php?id=".$row['id']."' class='btn btn-primary'>Apply</a>";
    }
  }

  ?>
    
    
  </tbody>
</table>