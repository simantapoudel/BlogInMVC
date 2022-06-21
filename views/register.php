<?php 

include '../model/LoginRegister.model.php';
// include 'includes/head_section.php'; 

?>

<title>Register Page</title>
</head>
<body>
    <div class='container'>
        <?php include 'includes/navbar.php' ?>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
            <label for='username'>Username: </label><br>
            <input type='text' name='username' id='username' placeholder='Enter your username' 
            value="<?php echo $username; ?>">
            <span class="error"><?php echo $usernameErr;?></span><br>
            <label for='fname'>First Name: </label><br>
            <input type='text' name='fname' id='fname' placeholder='Enter your first name'
             value="<?php echo $fname; ?>">
            <span class="error"><?php echo $fnameErr;?></span><br>
            <label for='lname'>Last Name: </label><br>
            <input type='text' name='lname' id='lname' placeholder='Enter your last name'
             value="<?php echo $lname; ?>">
            <span class="error"><?php echo $lnameErr;?></span><br>
            <label for='email'>Email: </label><br>
            <input type='email' name='email' id='email' placeholder='Enter your email' 
            value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr;?></span><br>
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender=="f") echo "checked";?>
             value="f">Female
            <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender=="m") echo "checked";?>
             value="m">Male
            <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender=="o") echo "checked";?>
             value="o">Other
            <span class="error"><?php echo $genderErr;?></span><br>
            <label for='password'>Password: </label><br>
            <input type='password' name='password' id='password' placeholder='Enter your password' 
            value="<?php echo $password; ?>">
            <span class="error"><?php echo $passwordErr;?></span><br>
            <label for='password1'>Confirm Password: </label><br>
            <input type='password' name='password1' id='password1' placeholder='Confirm your password'
             value="<?php echo $password1; ?>">
            <span class="error"><?php echo $password1Err;?></span><br>
            <input class='btn' type='submit' value='Register' name="register">
            <p>Already a user? <a href="login.php">Login</a></p>
        </form>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>

