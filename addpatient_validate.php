<?php

session_start();

if(isset($_POST['submit'])){

   
    $_SESSION['title'] = $_POST["title"];
    $_SESSION['fName'] = $_POST["fName"];
    $_SESSION['lName'] = $_POST["lName"];
    $_SESSION['dob']   = $_POST["dob"];
    $_SESSION['trn']  = $_POST["trn"];

    header('Location: addpatient.php');
    exit();

}else{
    header('Location: addpatient.php');
    exit();
}








?>