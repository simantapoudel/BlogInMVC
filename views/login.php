<?php 

include '../model/regloginlogic.php'; 
// include 'includes/head_section.php'; 

?>

<title>Login Page</title>
</head>
<body>
    <div class='container'>
        <?php include 'includes/navbar.php' ?>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
            <br><br>
            <label for='username'>Username: </label><br>
            <input type='text' name='username' id='username' placeholder='Enter your username' value="<?php echo $username;?>">
            <span class="error"><?php echo $usernameErr;?></span><br>
            <label for='password'>Password: </label><br>
            <input type='password' name='password' id='password' placeholder='Enter your password' value="<?php echo $password; ?>">
            <span class="error"><?php echo $passwordErr;?></span><br>
            <input class='btn' type='submit' value='Login' name="login">
            <p>Not a registered user? <a href='register.php'>Register</a></p>
        </form>
        <?php include 'includes/footer.php' ?>
    </div>
</body>
