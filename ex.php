<!DOCTYPE html>
<html lang="en">
<head>
  <title>CROSS SITE-SCRIPTING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
  <style>

     .background-image{
      background-image: url("./xss.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      }

/*body{
  background-color: black;
}*/
    h1{
      color: white;
      font-family: Algerian;
      font-size: 80px;
    }

    h2{
      font-family: Bodoni MT;
      font-size: 50px;
      color: white;
    }

    h3{
      font-family: Bodoni MT;
      color: white;
      font-size: 40px;
    }
  </style>

</head>
<body >
<div class="background-image">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.google.co.in/">ISAA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Signupp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="indexx.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <h1>Name</h1>
  <h3>MahiDeep</h3>
</div>
  </div>
</body>
</html>