<?php include '../model/User.model.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <div class='container'>
        <?php include 'includes/navbar.php' ?>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
            <label for='username'>Username: </label><br>
            <input type='text' name='username' id='username' placeholder='Enter your username'><br>
            <label for='fname'>First Name: </label><br>
            <input type='text' name='fname' id='fname' placeholder='Enter your first name'><br>
            <label for='lname'>Last Name: </label><br>
            <input type='text' name='lname' id='lname' placeholder='Enter your last name'><br>
            <label for='email'>Email: </label><br>
            <input type='email' name='email' id='email' placeholder='Enter your email'><br>
            <label for='password'>Password: </label><br>
            <input type='password' name='password' id='password' placeholder='Enter your password'><br>
            <label for='password1'>Confirm Password: </label><br>
            <input type='password' name='password1' id='password1' placeholder='Confirm your password'><br>
            <input class='btn' type='submit' value='Register' name="register">
            <p>Already a user? <a href="login.php">Login</a></p>
        </form>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>
</html>