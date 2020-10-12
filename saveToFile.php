<?php

session_start();

if(isset($_POST['submit3'])){

    $myfile = fopen("patient.txt", "a") or die("Unable to open file!");
    $txt = $_SESSION['title']."\t". $_SESSION['fName']."\t". $_SESSION['lName']."\t".
    $_SESSION['dob']."\t".$_SESSION['trn']."\n";
    fwrite($myfile, $txt);
    $txt = $_SESSION['street']."\t". $_SESSION['district']."\t". $_SESSION['parish']."\t".
    $_SESSION['country']."\t".$_SESSION['email']."\t".$_SESSION['phoneNum']."\n\n"; ;
    fwrite($myfile, $txt);
    fclose($myfile);
     
    $_SESSION['title'] = $_SESSION['fName'] = $_SESSION['lName'] = $_SESSION['dob']   = 
    $_SESSION['trn']  = $_SESSION['street'] =  $_SESSION['district'] = $_SESSION['parish'] = 
    $_SESSION['country'] = $_SESSION['email'] = $_SESSION['phoneNum'] = "";

    header('Location: addpatient.php');
    exit();
}else{
    header('Location: infoEntered.php');
    exit();
}


?>