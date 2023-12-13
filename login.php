<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h2 class="login-title">Login</h2>

        <form class="login-form" method="post">
            <div>
                <label for="name">User Name</label>
                <input id="name" type="text" placeholder="Enter your username" name="uname" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Enter your password" name="password" required>
            </div>
            <button class="btn btn--form" type="submit" name="submit" value="Login">Login</button>
        </form>
    </div>

    
    <?php
    session_start();
    include('dbcon.php');

    if (isset($_POST['submit'])) {

        $uname = $_POST['uname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user_details` WHERE `User_name` = '$uname' AND `Password` = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result == true) {
            header('location:welcome.php');
        } else {
            echo "<script>alert('Your username or password is incorrect')</script>";
        }

        mysqli_close($conn);

    }




    ?>


</body>

</html>