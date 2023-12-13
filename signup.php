<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h2 class="login-title">Sign Up</h2>

        <form class="login-form" method="post">
            <div>
                <label for="name">User Name</label>
                <input id="name" type="text" placeholder="Enter your username" name="uname" required>
            </div>

            <div>
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="Enter your email address" name="email" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Enter your password" name="password" required>
            </div>

            <button class="btn btn--form" type="submit" name="submit" value="Sign Up">Sign Up</button>
        </form>
    </div>


    <?php

    include('dbcon.php');

    if (isset($_POST['submit'])) {

        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `user_details` (`User_name`, `Email_address`, `Password`) VALUES ('$uname','$email','$password')";
        $result = mysqli_query($conn, $sql);

        if ($result == true) {
            header('location:login.php');
        } else {
            echo "<script>alert('Please enter your correct details')</script>";
        }
    }

    mysqli_close($conn);

    ?>

</body>

</html>