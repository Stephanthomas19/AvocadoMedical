<?php

session_start();

if(isset($_POST['submit2'])){

   
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['district'] = $_POST['district'];
    $_SESSION['parish'] = $_POST['parish'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phoneNum'] = $_POST['phoneNum'];

    if(preg_match("/^\d+\s[A-z]+\s[A-z]+/",$_SESSION['street'])){
       // Do Nothing 
    }else{
        $_SESSION['streetErr']="Street Format is Invalid";
        header('Location: addpatient2.php');
        exit();
    }

    if(preg_match("/^([a-zA-Z' ]+)$/",$_SESSION['district'])){
       //District is valid
    }else{
        $_SESSION['districtErr']="First Name is invalid";
        header('Location: addpatient2.php');
        exit();
    }

    if (filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
        
      } else {
        $_SESSION['emailErr']="Email is invalid";
        header('Location: addpatient2.php');
        exit();
      }

      if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_SESSION['phoneNum'])) {
        //Number is valid
      }else{
        $_SESSION['phoneNumErr']="Phone Number is invalid";
        header('Location: addpatient2.php');
        exit();
      }

    header('Location: login.php');
    exit();
}else{
    header('Location: addpatient.php');
    exit();
}


?>