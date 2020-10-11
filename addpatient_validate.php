<?php

session_start();

if(isset($_POST['submit'])){

   
    $_SESSION['title'] = $_POST["title"];
    $_SESSION['fName'] = $_POST["fName"];
    $_SESSION['lName'] = $_POST["lName"];
    $_SESSION['dob']   = $_POST["dob"];
    $_SESSION['trn']  = $_POST["trn"];

    
    $_SESSION['fNameErr'] = $_SESSION['lNameErr'] =
    $_SESSION['dobErr'] = $_SESSION['trnErr'] = "";

    if(preg_match("/^([a-zA-Z']{2,10})$/",$_SESSION['fName'])){
       //Do nothing 
    }else{
        $_SESSION['fNameErr']="First Name is invalid";
        header('Location: addpatient.php');
        exit();
    }

    if(preg_match("/^([a-zA-Z']{2,10})$/",$_SESSION['lName'])){
       //Do nothing
    }else{
        $_SESSION['lNameErr']="Last Name is invalid";
        header('Location: addpatient.php');
        exit();
    }

    if(( $_SESSION['dob'] >= "2019-01-01") ){
        $_SESSION['dobErr']="Must be born before 01/01/2019";
        header('Location: addpatient.php');
        exit();
    }

    if(( $_SESSION['dob'] <= "1898-01-01") ){
        $_SESSION['dobErr']="Must be born after 01/01/1898";
        header('Location: addpatient.php');
        exit();
    }

    if (($_SESSION['trn'] >= 100000000 ) && ($_SESSION['trn'] <= 900000000 )) {
        //Do nothing
    }else{
        $_SESSION['trnErr']="Invalid TRN "; 
        header('Location: addpatient.php');
        exit();
    }
    
    header('Location: addpatient2.php');
    exit();
}else{
    header('Location: addpatient.php');
    exit();
}


?>