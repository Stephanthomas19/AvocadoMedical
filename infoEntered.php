<?php
session_start();

if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === TRUE) {
  
    // Presents the users with all the add patient function
   
} else {
    // Reloads the login because they are not authorized
    header('Location: addpatient2.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images\AvocadoIcon.png" />
    <link rel="stylesheet" href="infoEntered.css">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <title>Avocado Medical | Information Confirmation </title>
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
    <div class="displayInfo">
                <h1 class="heading">Information Confirmation</h1>
                <p class="formInstruct">Please check the data entered before submitting</p>
                <p class="infoLabel">Personal Information</p>

                <table>
                    <tr>
                        <td><p class="data">Name:</p></td>
                        <td><p class="data"><?php echo $_SESSION['title']?></p></td>
                        <td><p class="data"><?php echo $_SESSION['fName'] ?> </p></td>
                        <td><p class="data"><?php echo $_SESSION['lName'] ?> </p></td>  
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><p class="data"> DOB:</p></td>
                        <td><p class="data"><?php echo $_SESSION['dob'] ?> </p></td>
                    </tr>
                    <tr>
                        <td><p class="data">TRN:</p></td>
                        <td><p class="data"><?php echo $_SESSION['trn'] ?> </p></td>
                    </tr>
                </table>
                
                <p class="infoLabel">Address</p>
                
                <table>
                            <td><p class="data"> Street:</p></td>
                            <td><p class="data"><?php echo $_SESSION['street'] ?> </p></td>
                            <td></td><td></td>
                            <td><p class="data"> District:</p></td>
                            <td><p class="data"><?php echo $_SESSION['district'] ?> </p></td>
                            <td></td><td></td>
                            <td><p class="data"> Parish:</p></td>
                            <td><p class="data"><?php echo $_SESSION['parish'] ?> </p></td>
                            <td></td><td></td>
                            <td><p class="data"> Country:</p></td>
                            <td><p class="data"><?php echo $_SESSION['country'] ?> </p></td> 
                </table>
                
                <p class="infoLabel">Contact Information</p>
                <table>
                    <td><p class="data"> Email:</p></td>
                    <td><p class="data"><?php echo $_SESSION['email'] ?> </p></td>
                    <td></td><td></td><td></td>
                    <td><p class="data"> Phone Number:</p></td>
                    <td><p class="data"><?php echo $_SESSION['phoneNum'] ?> </p></td>
                </table>



                <form  method="POST" action="saveToFile.php">
                            <button class='continue' type="submit" name="submit3">
                                Confirm
                                <img src='Images\right-arrow.png' class="nextArrow">
                            </button>
                </form>    
    </div>
</body>
</html>

 <!-- <td>Name:</td>
                            <td><p><?php echo $_SESSION['title']?></p></td>
                                <td><p><?php echo $_SESSION['fName'] ?> </p></td>
                                <td><p><?php echo $_SESSION['lName'] ?> </p></td>
                                
                                <td></td>
                                <td>Email</td>
                            <td><p><?php echo $_SESSION['email'] ?> </p></td>
                            </tr>
                            <tr>
                            <td>DOB</td>
                                <td><p><?php echo $_SESSION['dob'] ?> </p></td>
                            <td>Address</td>
                            <td><p><?php echo $_SESSION['street'] ?> </p></td>
                            <td><p><?php echo $_SESSION['district'] ?> </p></td>
                            <td><p><?php echo $_SESSION['parish'] ?> </p></td>
                            <td></td> 
                                <td>Country</td>
                                <td><p ><?php echo $_SESSION['country'] ?> </p></td>    
                        </tr>
                        <tr>
                        
                            <td></td>  <td></td>  <td></td>  <td></td>
                                <td></td> <td></td>  <td></td>      
                                <td>Telephone Number</td>
                                <td><p><?php echo $_SESSION['phoneNum'] ?> </p></td>    
                        </tr>
                            <tr>
                            <td>TRN</td>
                                <td><p><?php echo $_SESSION['trn'] ?> </p></td>
                            </tr> -->
