<?php 
include('./includes/config.php');
include('./includes/header.php');


$error_message = '';

if($_SERVER['REQUEST_METHOD']=='POST') { // Check if form is submitted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user already exists
    $select = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($select);

    if($result->num_rows > 0) {
        $error_message = "User already exists";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if($conn->query($sql) === TRUE) {
            $last_insert_id = $conn->insert_id;
            $_SESSION['user_id'] = $last_insert_id;
            $_SESSION['email'] = $email;
            setcookie('email', $email);
            setcookie('id', $last_insert_id);
            header('Location: register.php'); // Redirect to register.php or wherever you want
            exit; // Make sure to exit after redirection
        } else {
            $error_message = 'Error: ' . $conn->error;
        }
    }
}
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign up</h5>
            <form action='' method='post'>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Enter UserName" name='name'>
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name='email'>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
                <label for="floatingPassword">Password</label>
              </div>
             
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit">Sign up</button>
              </div>
              <hr class="my-4">
              <div class='text-center'>
                <a href='./login.php' class='link link-active'>Already have an Account?</a>
              </div>
            </form>
          </div>
        </div>
        <?php
          if($error_message){
            echo "<div class='alert alert-danger'>$error_message</div>";
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
