<?php
    session_start();
   if($_SESSION['email']!=null)
   {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">KEYUR BHUT(KB)</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="display.php">Display</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" class="btn btn-light my-2 my-sm-0" type="submit">LOGOUT</a>
            </form>
        </div>
    </nav>
</body>

</html>

<?php
   }
   else
   {
    header("Location:index.php");
    exit();
   }
?>