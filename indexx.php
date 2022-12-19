<?php

$con = mysqli_connect("localhost", "root", "", "pj");
session_start();
if ($_POST) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $name = str_replace("<script>", "", $_POST["name"]);

    $sql = "SELECT id FROM pjj WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >= 0 ) {
        $_SESSION['username'] = $username;
        header("location: Main.php");
    } else
        $msg = "Invalid Username/Password";
} else {
    $msg = "";
}

if ($_POST) {
setcookie("username",$_POST['username'],strtotime("+1 day"));
setcookie("password",$_POST['password'],strtotime("+1 day"));

echo $_COOKIE["username"];
}

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .my-container {
            width: 50%;
            padding: 8%;
            margin: 0 auto;
        }


        body{
            background-color: grey;
        }

        .p{
            text-align: center;
            font-size: 15px;
            color: aqua;
        }
    </style>
</head>

<body>
<button ><a href="ex.php"><-Back</a></button>
    <div class="my-container">
        <form action method="POST">
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <p class="text-danger small"><?php echo $msg; ?></p>
            <button class="btn btn-secondary w-100">Login</button>
            <p class="p">Don't have an account? <a href="Signupp.php">Signup</a></p>
        </form>
    </div>
</body>

</html>