<?php
session_start();

if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === TRUE) {
    // Presents the users with all the add patient function
   
} else {
    // Reloads the login because they are not authorized
    header('Location: addpatient.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images\AvocadoIcon.png" />
    <link rel="stylesheet" href="addpatient.css">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <title>Avocado Medical | Add Patient 2 </title>
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
    <h1 class="heading">Medical Form</h1>
    <p class="formInstruct">Please fill in the patient's information accurately</p>
    <form method="POST" >
    <table class="form">
                <tr>
                    <td><label>Street Address</label></td>
                    <td><input type="text" name="street" class="inputBox" required></td>
                    <td><label>District</label></td>
                    <td><input type="text" name="district" class="inputBox" required></td>
                    <td><label>Parish</label></td>
                    <td>
                    <select id="parish" name="parish" class="inputBox">
                        <option value="Kingston">Kingston</option>
                        <option value="St. Andrew">St. Andrew</option>
                        <option value="Portland">Portland</option>
                        <option value="St. Thomas">St. Thomas</option>
                        <option value="St. Catherine">St. Catherine</option>
                        <option value="St. Mary">St. Mary</option>
                        <option value="St. Ann">St. Ann</option>
                        <option value="Manchester">Manchester</option>
                        <option value="Clarendon">Clarendon</option>
                        <option value="Hanover">Hanover</option>
                        <option value="Westmoreland">Westmoreland</option>
                        <option value="St. James">St. James</option>
                        <option value="Trelawny">Trelawny</option>
                        <option value="St. Elizabeth">St. Elizabeth</option>
                    </select>     
                    
                   </td>
                </tr>
                <tr>
                    <td><label>Country</label></td>
                    <td>
                    <input type="text" name="country" class="inputBox" required>
                    </td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="email" name="email" class="inputBox" required></td>
                </tr>
                <tr>
                    <td><label>Telephone Number</label></td>
                    <td><input type="tel" name="phoneNum" class="inputBox" required></td>
                </tr>
    </table>            
    </form>    
    
    <button class='continue' type="submit" name="submit">
        Continue
        <img src='Images\right-arrow.png' class="nextArrow">
    </button>
           
</body>
</html>