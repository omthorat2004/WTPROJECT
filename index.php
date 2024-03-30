
<?php

include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
if(!isset($_SESSION['user_id'])){
    header('Location:./login.php');
}




?>

<section class=''>
    <div class='gallery'>
        <img src='./includes/image1.jpeg' class='gallery-image'/>
    </div>
    <div class='flex'>
        <div>
        </div>
        <div>
        </div>
    </div>
    <hr style="width:90%; margin:0 auto; border:solid 1px black"/>
    <div class='home-padding'>
    <h2 >Why Us?</h2>
    </div>
    <div class='flex  flex-wrap labs '>
        <div class='flex  flex-28 '>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/img/nblsblue.png'/>
            </div>
            <h6>NABL Accredited
                Labs</h6>
                <p>Follows all protocols as per NABL & CAP Guidelines
                </p>
            </div>
        </div >
        <div class='flex  flex-28'>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/landingpages/dbt_pack_test/image/labs4.png'/>
            </div>
            <h6>Trusted by Leading
Doctors & hospitals</h6>
                <p>Qualified Pathologist at each lab
                </p>
            </div>
        </div >
        <div class='flex  flex-28'>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/landingpages/dbt_pack_test/image/labs1.png'/>
            </div>
            <h6>Shortest Reporting Time</h6>
                <p>Ownership and Innovation
                </p>
            </div>
        </div >
        <div class='flex  flex-28'>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/landingpages/dbt_pack_test/image/labs5.png'/>
            </div>
            <h6>Accurate
Test Reports</h6>
                <p>Quality checks by Quality Assurance Team
                </p>
            </div>
        </div >
        <div class='flex  flex-28'>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/img/nblsblue.png'/>
            </div>
            <h6>10 thousands+ Satisfied
Customers</h6>
                <p>Making superior quality diagnostics services
                </p>
            </div>
        </div >
        <div class='flex  flex-28'>
            <div class='flex flex-col'>
            <div>
                <img class='card-logo' src='https://www.pathkindlabs.com/assets/img/research.png'/>
            </div>
            <h6>Scientific Orientation</h6>
                <p>MD Doctors in Every Lab
State-of-the-Art Machines
                </p>
            </div>
        </div >
    </div>
    <hr style="width:90%; margin:0 auto; border:solid 1px black"/>
    <div class='map'>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.93722037317818!2d75.76957756550944!3d20.259020309012925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bda33fc0e25fea1%3A0x720e147b87a293eb!2sTejas%20Clinical%20Laboratory!5e0!3m2!1sen!2sin!4v1711657829385!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  
</section>
<?php
include('includes/footer2.php');

?>

