<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="Images\AvocadoIcon.png" />
    
    <title>    
        Avocado Medical | Login
    </title>
</head>
<body>
    <nav class="navBar">
        <img src='Images\AvocadoIcon.png' class="logo">
        <img src='Images\AvocadoMedicalCentre.png' class="companyName">
        <img src='Images\LocationIcon.png' class="locationPin"> 
        <img src='Images\address.png' class="address"> 
        <img src='Images\PhoneIcon.png' class="phone">  
        <img src='Images\Number.png' class="number">
    </nav>
    <div class="loginCard">
        <img src="Images\doctor.PNG" class="profile">
            <h1 class="welcome">WELCOME</h1>
            <form method="POST">
                <input type="text" name="userName" class="credentials" placeholder="Username" name="userName"  required>
                <input type="password" name="password" class="credentials" placeholder="Password" name="password" required>
                <button class='loginButt' type="submit" name="submit">Login</button>

            </form>    
    </div>
  
</body>
</html>

<?php
   session_start();
   if(isset($_POST['submit'])){
       $userName = $_POST['userName'];
       $password = $_POST['password'];

       $_SESSION['title'] = "";
       $_SESSION['fName'] = "";
       $_SESSION['lName'] = "";
       $_SESSION['dob'] = "";
       $_SESSION['trn'] = "";

       $_SESSION['street'] = "";
       $_SESSION['district'] = "";
       $_SESSION['parish'] = "";
       $_SESSION['country'] = "";
       $_SESSION['email'] = "";
       $_SESSION['phoneNum'] = "";

       $_SESSION['fNameErr'] = $_SESSION['lNameErr'] =
       $_SESSION['dobErr'] = $_SESSION['trnErr'] = "";

       $_SESSION['streetErr'] = $_SESSION['districtErr'] =
       $_SESSION['parishErr'] = $_SESSION['countryErr'] = 
       $_SESSION['emailErr'] = $_SESSION['phoneNum'] = "";
       
       if($userName=='amcadmin' && $password=='fatpear#123'){
         $_SESSION['authorized'] = TRUE;
          header("location:addpatient.php");
          exit();
       }
       else
       echo '<script language="javascript">';
       echo 'alert( "Invalid Username and Password")';
       echo '</script>';
   }
?>
