<?php

include "config/database.php";

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    // encrypt password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fullname, email, password)
            VALUES('$fullname', '$email', '$password')";

    if(mysqli_query($conn, $sql)){

        echo "Registration Successful";

    } else {

        echo mysqli_error($conn);

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Create Account</h1>

<form method="POST">

    <input type="text"
           name="fullname"
           placeholder="Full Name"
           required>

    <br><br>

    <input type="email"
           name="email"
           placeholder="Email"
           required>

    <br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required>

    <br><br>

    <button type="submit" name="register">
        Register
    </button>

</form>

</body>
</html>