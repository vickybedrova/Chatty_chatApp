<?php
include("include/connection.php");

    if(isset($_POST['signup'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user-pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user-email']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['user-country']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user-gender']));
        $rand = rand(1,2);

        if($name == ''){
            echo"<script>alert('We cannot verify your name')</script>";
        }
        if(strlen($pass)<8){
            echo"<script>alert('Password should be at least 8 character long')</script>";
            exit();
        }
        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);

        if($check==1){
            echo"<script>alert('Email is already registered, please try logging in')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
            exit();
        }

        if($rand == 1){
            $profile_picture = "images/profile1.png";
        }else if($rand == 2){
            $profile_picture = "images/profile2.png";
        }

        $insert = "insert into users (user_name, user_pass, user_email, user_profile,
         user_country, user_gender) values('$name', '$pass', '$email', '$profile_picture', '$country', '$gender')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Congratulations $name, your account has been created successfully!')</script>";

            echo"<script>window.open('login.php', '_self')</script>";
        }else{
            echo"<script>alert('Registration failed, try again!')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";

        }




    }


?>