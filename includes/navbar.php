<?php
    include('includes/config.php');
    include('includes/header.php');
    
?>

<div class="navbar">
        <a href='./index.php' class='navbar-brand text-white'>Tejas Clinical Laboratory</a>
        <div class="menu-items">
            <a href='./appointments.php'>Appointemnts</a>
            <a href="./contact.php">Contact</a>
            <a href="#search">Search</a>
            <a href="#about">About Us</a>
            <a href='./adminHome.php'>Enter as Owner</a>
        </div>
        <div class='dropdown-btn'>
            <img src="./includes/profile.jpeg" alt="Profile" class="profile-logo"/>
            <div class=' dropdown-menu '>
                <a href='./user.php'   class='btn btn-outline-primary w-100'>Profile</a>
                <form class='d-grid' action='logout.php' method='post'>
                    <button type='submit' class='btn btn-outline-primary'>Log Out</button>
                </form>
            </div>
        </div>
         
</div>
<?php
include('includes/footer.php');

?>

