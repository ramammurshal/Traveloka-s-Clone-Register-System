<?php
    if(!isset($name)){
        $name = "";
    }
    if(!isset($birthday)){
        $birthday = "";
    }
    if(!isset($phoneNumber)){
        $phoneNumber = "";
    }
    if(!isset($website)){
        $website = "";
    }
    if(!isset($email)){
        $email = "";
    }
    if(!isset($password)){
        $password = "";
    }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form PHP</title>
    <link rel="stylesheet" href="style.css" media="screen">
</head>

<body>
    <div class="bluePart">
        <div class="becomeAMemberText">Become a Traveloka member and Enjoy exclusive benefits!</div>

        <div class="theForm">
            <form action="process.php" method="post">
                <label class="joinUSText">Join Us!</label><br>
                <hr class="registration">

                <div class="requiredText">(*required)</div>

                <div class="name">
                    <label class="inputText">Name</label>
                    <label class="error"> *
                        <?php if(isset($nameErr)){?>
                            <span><?php echo $nameErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="text" placeholder="Your name" name="name" class="nameInput" value="<?php echo $name ?>"><br>
                </div>

                <div class="gender">
                    <label class="inputText">Gender</label><label class="error"> *
                        <?php if(isset($genderErr)){?>
                            <span><?php echo $genderErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="radio" name="gender" class="genderInput" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="Male") echo "checked"?> value="Male"> <span class="genderKindText">Male</span><br>
                    <input type="radio" name="gender" class="genderInput" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="Female") echo "checked"?> value="Female"> <span class="genderKindText">Female</span><br>
                </div>

                <div class="birthday">
                    <label class="inputText">Birthday</label>
                    <label class="error"> *
                        <?php if(isset($birthdayErr)){?>
                            <span><?php echo $birthdayErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="date" placeholder="Your birthday" name="birthday" class="birthdayInput" value="<?php echo $birthday ?>"><br>
                </div>

                <div class="phoneNumber">
                    <label class="inputText">Phone Number</label>
                    <label class="error"> *
                        <?php if(isset($phoneNumberErr)){?>
                            <span><?php echo $phoneNumberErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="number" placeholder="Your phone number" name="phoneNumber" class="phoneNumberInput" value="<?php echo $phoneNumber ?>"><br>
                </div>

                <div class="website">
                    <label class="inputText">Website</label>
                    <label class="error">
                        <?php if(isset($websiteErr)){?>
                            <span><?php echo " * " . $websiteErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="text" placeholder="Your website" name="website" class="websiteInput" value="<?php echo $website ?>"><br>
                </div>

                <div class="email">
                    <label class="inputText">Email</label>
                    <label class="error"> *
                        <?php if(isset($emailErr)){?>
                            <span><?php echo $emailErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="text" placeholder="Your email" name="email" class="emailInput" value="<?php echo $email ?>"><br>
                </div>

                <div class="password">
                    <label class="inputText">Password</label>
                    <label class="error"> *
                        <?php if(isset($passwordErr)){?>
                            <span><?php echo $passwordErr ?>
                        <?php } ?>
                    </label>
                    <br>
                    <input type="password" placeholder="Your password" name="password" class="passwordInput" value="<?php echo $password ?>"><br>
                </div>

                <div class="button">
                    <input type="submit" value="Register!" class="buttonInput">
                </div>

                <label class="copy2021Traveloka">&copy; 2021 Traveloka</label>
            </form>
        </div>
    </div>

    <div class="grayPartRegistration"></div>

    <div class="blackPartRegistration">
        <img src="logo_traveloka.png" alt="Logo Traveloka" title="Traveloka" class="travelokaLogo">
    </div>
</body>

</html>
