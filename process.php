<?php

    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $phoneNumber = $_POST["phoneNumber"];
    $website = $_POST["website"];
    $email = $_POST["email"];
    $password = $_POST["password"];

        // Name Check
        if(empty($name)){
            $nameErr = "Name is required!";
        }
        else{
            $name = test_input($name);
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr = "Only letters and white space allowed!";
            }
        }

        // Gender Check??
        if(empty($_POST["gender"])){
            $genderErr = "Gender is required!";
        }
        else{
            $_POST["gender"] = test_input($_POST["gender"]);
        }

        // Birthday Check
        if(empty($birthday)){
            $birthdayErr = "Birthday is required!";
        }
        else{
            $birthday = test_input($birthday);
        }

        // Phone Number Check
        if(empty($phoneNumber)){
            $phoneNumberErr = "Phone Number is required!";
        }
        else{
            $phoneNumber = test_input($phoneNumber);
        }

        // Website check
        if(empty($website)){
        }
        else{
            $website = test_input($website);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr = "Invalid URL!";
            }
        }

        // Email Check
        if(empty($email)){
            $emailErr = "Email is required!";
        }
        else{
            $email = test_input($email);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format!";
            }
        }

        // Password Check
        if(empty($password)){
            $passwordErr = "Password is required";
        }
        else if(strlen($password) < 6){
            $passwordErr = "Your password have a minimum of 6 characters";
        }
        else{
            $password = test_input($password);
        }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(empty($nameErr) && empty($genderErr) && empty($birthdayErr) && empty($phoneNumberErr) && empty($websiteErr) && empty($emailErr) && empty($passwordErr)){
        include("feedback.php");
    }
    else{
        include("form.php");
    }
?>
