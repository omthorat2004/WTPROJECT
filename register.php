<?php
include('includes/header.php');
include('includes/config.php');


?>
<div class="containers flex-col">
        <div class="title">Registration</div>
        
        <form action="#">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required=""> <!-- 1 -->
                </div>

                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required=""> <!-- 2 -->
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required=""> <!-- 3 -->
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required=""> <!-- 4 -->
                </div>

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required=""> <!-- 5 -->
                </div>

                <div class="input-box">
                    <span class="details">Confrim Password</span>
                    <input type="text" placeholder="Confirm your password" required=""> <!-- 6 -->
                </div>

            </div>
            <div class="gender-details">
                <span class="gender-title">Gender</span>
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span> <!-- 1 -->
                    </label>

                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span> <!-- 2 -->
                    </label>

                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span> <!-- 3 -->
                    </label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class='btn btn-primary  btn-lg btn-block'>Register</button>
            </div>
        </form>
    </div>