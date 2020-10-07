<?php
session_start();

if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === TRUE) {
  
   
} else {
    // Reloads the login because they are not authorized
    header('Location: login.php');
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
    <title>Avocado Medical | Add Patient </title>
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
    <form method="POST" action="addpatient_validate.php" >
    <table class="form">
                <tr>
                    <td><label>Title</label></td>
                    <td>
                        <select name="title" class="inputBox">
                            <option vlaue="Mr" <?php if($_SESSION['title'] == 'Mr') echo 'selected = "selected"'; ?> >Mr</option>
                            <option vlaue="Miss" <?php if($_SESSION['title'] == 'Miss') echo 'selected = "selected"'; ?> >Miss</option>
                            <option vlaue="Mrs" <?php if($_SESSION['title'] == 'Mrs') echo 'selected = "selected"'; ?> >Mrs</option>
                            <option vlaue="Dr" <?php if($_SESSION['title'] == 'Dr') echo 'selected = "selected"'; ?> >Dr</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="fName" value="<?php echo htmlspecialchars($_SESSION['fName']); ?>" class="inputBox" required></td>
                    <td><input type="text" name="lName" value="<?php echo htmlspecialchars($_SESSION['lName']); ?>" class="inputBox" required></td>
                </tr>
                <tr>
                    <td><label>DOB</label></td>
                    <td><input type="date" name="dob" value="<?php echo htmlspecialchars($_SESSION['dob']); ?>" class="inputBox" required></td>
                </tr>
                <tr>
                    <td><label>TRN</label></td>
                    <td><input type="number" name="trn" value="<?php echo htmlspecialchars($_SESSION['trn']); ?>" class="inputBox"  required></td>
                </tr>
    </table>            
      
    
    <button class='continue' type="submit" name="submit">
        Continue
        <img src='Images\right-arrow.png' class="nextArrow">
    </button>
           
    </form>  
</body>
</html>

<?php

    

?>