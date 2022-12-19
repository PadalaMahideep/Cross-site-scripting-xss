<?php
  $con = mysqli_connect("localhost", "root", "", "pj");
  
if ($_POST) {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);   
    $name = str_replace("<script>", "", $_POST["name"]);
    $name = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_POST["name"]);
    $name = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_POST["name"]);
    $name = preg_replace("/<(.*)[P,p](.*)[R,r](.*)[O,o](.*)[M,m](.*)[P,p](.*)[T,t]>/i", "", $_POST["name"]);
    $name = preg_replace("/<(.*)[A,a](.*)[L,l](.*)[E,e](.*)[R,r](.*)[T,t]>/i", "", $_POST["name"]);
    $name = preg_replace("/<[H,h][1]>/i", "", $_POST["name"]);
    $name = str_replace("<","", $_POST["name"]);
    
    $sql = "INSERT INTO pjj(name, username, password) VALUES('$name', '$username', '$password')";
    if (mysqli_query($con, $sql)) {
        ?>
        <script src="js/sweetalert.js"></script>
        <script>
            alert("Account Created Please  Login");
       /*swal({
        title: <?php  echo "Created account. Please login"; ?>,
        icon: "success",
        button: "OK .Done!"
        });*/
       </script>
       <?php
        $msg = "";
    }
} else {
    $msg = "";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            <input class="form-control" type="text" placeholder="name" name="name" required /><br />
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <p class="text-danger small"><?php echo $msg; ?></p>
            <button class="btn btn-secondary w-100">Signup</button>
            <p class="p">Already have an account? <a href="indexx.php">Login</a> </p>
        </form>
    </div>

</body>

</html>