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
        <div class="congratulationsText">Congratulations!</div>
        <div class="jumbotron">
            <div class="accountActivateText">Your account has been activated!</div>
            <div class="confirmDataText">Here is a confirmation of your account data:</div>
            <div class="dataVerif">
                <div class="kindOfData">
                    <div class="nameKind">Name</div>
                    <div class="genderKind">Gender</div>
                    <div class="birthdayKind">Birthday</div>
                    <div class="phoneNumberKind">Phone Number</div>
                    <div class="websiteKind">Website</div>
                    <div class="emailKind">Email</div>
                    <div class="passwordKind">Password</div>
                </div>
                <div class="answerData">
                    <div class="nameAnswer">: <?php echo $name?></div>
                    <div class="genderAnswer">: <?php echo $_POST["gender"]?></div>
                    <div class="birthdayAnswer">: <?php echo $birthday?></div>
                    <div class="phoneNumberAnswer">: <?php echo $phoneNumber?></div>
                    <div class="websiteAnswer">: 
                        <?php 
                            if(empty($website)){
                                echo "-";
                            }
                            else{
                                echo $website;
                            }
                        ?>
                    </div>
                    <div class="emailAnswer">: <?php echo $email?></div>
                    <div class="passwordAnswer">: <?php echo $password?></div>
                </div>
            </div>
            <hr class="feedback">
            <label class="copy2021Traveloka">&copy; 2021 Traveloka</label>
        </div>
    </div>
    <div class="grayPartFeedback"></div>
    <div class="blackPartFeedback">
        <img src="logo_traveloka.png" alt="Logo Traveloka" title="Traveloka" class="travelokaLogo">
    </div>
</body>

</html>
