<?php
include('includes/header.php');

?>


<div class='d-flex flex-column flex-shrink-0 p-3 text-white bg-dark w-15 h-screen'>
<ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./user.php" class="nav-link text-white profile-link"  onclick='profileClick()' aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="./appPending.php" onclick='appointmentClick()' class="nav-link text-white appointment-link">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Appointment
        </a>
      </li>
    </ul>
</div>