<?php 
include('includes/header.php');
include('includes/config.php');

$error_message;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email=='omthorat1005@gmail.com'&&$password=='pass'){
      $_SESSION['admin_login']='Logged In';
      header('Location: adminHome.php');
      exit();
    }else{
      $error_message="Incorrect email or password";
    }
}
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form action='adminLogin.php' method='post'>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name='email' id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name='password' placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
             
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in as Owner</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
          <?php
          if(isset($error_message)){
            echo $error_message;
          }
        ?>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>