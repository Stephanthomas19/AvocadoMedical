<?php
session_start();

if (isset($_SESSION['validated']) && $_SESSION['validated'] === TRUE) {
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
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
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
    <form method="POST" action="addpatient_validate2.php" >
    <table class="form">
                <tr>
                    <td><label>Street Address</label></td>
                    <td><input type="text" name="street" value="<?php echo htmlspecialchars($_SESSION['street']); ?>" class="inputBox" placeholder="e.g. 2 Johns Rd"  required></td>
                    <td><label>District</label></td>
                    <td><input type="text" name="district" value="<?php echo htmlspecialchars($_SESSION['district']); ?>" class="inputBox" placeholder="e.g. Round Hill" required></td>
                    <td><label>Parish</label></td>
                    <td>
                    <select name="parish" class="inputBox">
                        <option value="Kingston" <?php if($_SESSION['parish'] == 'Kingston') echo 'selected = "selected"'; ?>  >Kingston</option>
                        <option value="St. Andrew" <?php if($_SESSION['parish'] == 'St. Andrew') echo 'selected = "selected"'; ?> >St. Andrew</option>
                        <option value="Portland" <?php if($_SESSION['parish'] == 'Portland') echo 'selected = "selected"'; ?>>Portland</option>
                        <option value="St. Thomas" <?php if($_SESSION['parish'] == 'St. Thomas') echo 'selected = "selected"'; ?>>St. Thomas</option>
                        <option value="St. Catherine" <?php if($_SESSION['parish'] == 'St. Catherine') echo 'selected = "selected"'; ?>>St. Catherine</option>
                        <option value="St. Mary" <?php if($_SESSION['parish'] == 'St. Mary') echo 'selected = "selected"'; ?>>St. Mary</option>
                        <option value="St. Ann" <?php if($_SESSION['parish'] == 'St. Ann') echo 'selected = "selected"'; ?>>St. Ann</option>
                        <option value="Manchester" <?php if($_SESSION['parish'] == 'St. Manchester') echo 'selected = "selected"'; ?>>Manchester</option>
                        <option value="Clarendon" <?php if($_SESSION['parish'] == 'St. Clarendon') echo 'selected = "selected"'; ?>>Clarendon</option>
                        <option value="Hanover" <?php if($_SESSION['parish'] == 'Hanover') echo 'selected = "selected"'; ?>>Hanover</option>
                        <option value="Westmoreland" <?php if($_SESSION['parish'] == 'Westmorland') echo 'selected = "selected"'; ?>>Westmoreland</option>
                        <option value="St. James" <?php if($_SESSION['parish'] == 'St. James') echo 'selected = "selected"'; ?>>St. James</option>
                        <option value="Trelawny" <?php if($_SESSION['parish'] == 'Trelawny') echo 'selected = "selected"'; ?>>Trelawny</option>
                        <option value="St. Elizabeth" <?php if($_SESSION['parish'] == 'St. Elizabeth') echo 'selected = "selected"'; ?>>St. Elizabeth</option>
                    </select>     
                    
                   </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="errCont"><p class="errMsg"><?php echo $_SESSION['streetErr'] ?>  </p></td>
                    <td></td>
                    <td class="errCont"><p class="errMsg"><?php echo $_SESSION['districtErr'] ?>  </p></td>
                </tr>    
                <tr>
                    <td><label>Country</label></td>
                    <td>
                    <select name="country" class="inputBox">
                        <option value="Jamaica" <?php if($_SESSION['country'] == 'Jamaica') echo 'selected = "selected"'; ?>>Jamaica</option>
                        <option value="Japan" <?php if($_SESSION['country'] == 'Japan') echo 'selected = "selected"'; ?> >Japan</option>
                        <option value="China" <?php if($_SESSION['country'] == 'China') echo 'selected = "selected"'; ?> >China</option>
                        <option value="Russia" <?php if($_SESSION['country'] == 'Russia') echo 'selected = "selected"'; ?>>Russia</option>
                        <option value="United States" <?php if($_SESSION['country'] == 'United States') echo 'selected = "selected"'; ?>>United States</option>
                        <option value="United Kingdom" <?php if($_SESSION['country'] == 'United Kingdom') echo 'selected = "selected"'; ?> >United Kingdom</option>
                        <option value="Belize" <?php if($_SESSION['country'] == 'Belize') echo 'selected = "selected"'; ?> >Belize</option>
                        <option value="Trinidad and Tobago" <?php if($_SESSION['country'] == 'Trinidad and Tobago') echo 'selected = "selected"'; ?>>Trinidad and Tobago</option>
                        <option value="Haiti" <?php if($_SESSION['country'] == 'Haiti') echo 'selected = "selected"'; ?>>Haiti</option>
                        <option value="Brazil" <?php if($_SESSION['country'] == 'Brazil') echo 'selected = "selected"'; ?>>Brazil</option>
                        <option value="Africa" <?php if($_SESSION['country'] == 'Africa') echo 'selected = "selected"'; ?>>Africa</option>
                        <option value="Barbados" <?php if($_SESSION['country'] == 'Barbados') echo 'selected = "selected"'; ?>>Barbados</option>
                        <option value="Thailand" <?php if($_SESSION['country'] == 'Thailand') echo 'selected = "selected"'; ?>>Thailand</option>
                        <option value="Cuba" <?php if($_SESSION['country'] == 'Cuba') echo 'selected = "selected"'; ?>>Cuba</option>
                    </select>     
                    </td>
                </tr>
                <tr>
                <td></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="email" name="email" class="inputBox" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" placeholder=" johnbrown@gmail.com" required></td>
                </tr>
                <tr>
                <td></td>
                <td class="errCont"><p class="errMsg"><?php echo $_SESSION['emailErr'] ?>
                </tr>
                <tr>
                    <td><label>Telephone Number</label></td>
                    <td><input type="tel" name="phoneNum" class="inputBox" value="<?php echo htmlspecialchars($_SESSION['phoneNum']); ?>" placeholder="876-512-2222" required></td>
                </tr>
                <tr>
                <td></td>
                <td class="errCont"><p class="errMsg"><?php echo $_SESSION['phoneNumErr'] ?>
                </tr>
    </table>        

    
    <button class='continue' type="submit" name="submit2">
        Submit
        <img src='Images\right-arrow.png' class="nextArrow">
    </button>
    </form>    
    
</body>
</html>