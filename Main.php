<?php

$con = mysqli_connect("localhost", "root", "", "pj");

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userQuery = "SELECT * FROM pjj WHERE username = '$username'";
    $userResult = mysqli_query($con, $userQuery);

    $data = mysqli_fetch_assoc($userResult);
} else {
    header("Location: indexx.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross site scripting</title>
</head>

<body>
    <p>Welcome , <?php echo $data['name']; ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>