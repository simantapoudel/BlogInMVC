<?php include '../config/config.php'; ?>

<?php
$usernameErr = $fnameErr = $lnameErr = $emailErr = $genderErr = $passwordErr = $password1Err  = "";
$username = $fname = $lname = $email = $gender = $password = $password1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        //filter_var to validate the email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Enter the correct format";
        }
    }

    $username_email_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($username_email_check_query);
    $user = $result->fetch_assoc();

    if ($user) {
        if ($user['username'] === $username) {
            $usernameErr = "This username is already taken.";
        }
        if ($user['email'] === $email) {
            $emailErr = "This email already exists";
        }
    }

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        //checking if password is 8 char, at least one uppercase, lowercase, special symbol, one number
        if (!preg_match("/^[\w]+$/", $password)) {
            $passwordErr = "Should be alphanumeric";
        }
    }

    if (empty($_POST["password1"])) {
        $password1Err = "Please enter the password";
    } elseif ($_POST["password"] !== $_POST["password1"]) {
        $password1Err = "Password didn't match";
    } else {
        $password1 = test_input($_POST["password1"]);
    }
}

if (isset($_POST['register'])) {
    if(
        $usernameErr == "" 
        && $fnameErr == "" 
        && $lnameErr == "" 
        && $emailErr == "" 
        && $genderErr == ""
        && $passwordErr == ""
        && $password1Err == ""
    ) {
        $stmt = $conn->prepare("INSERT INTO users (username, firstname, lastname, gender, email, password) 
                                VALUES (?, ?, ?, ?, ?,?)");
        $stmt->bind_param("ssssss", $username, $firstname, $lastname,$gender, $email, $password);
        $username = $_POST['username'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $stmt->execute();
        echo "New records created successfully";
        $stmt->close();
        $conn->close();
        header("Location: index.php");
    } else {
        // var_dump($usernameErr);
        // var_dump($fnameErr);
        // var_dump($lnameErr);
        // var_dump($genderErr);
        // var_dump($emailErr);
        // var_dump($passwordErr);
        // var_dump($password1Err);
        echo "Fill up correctly";
    }
}

function test_input($data) 
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

?>