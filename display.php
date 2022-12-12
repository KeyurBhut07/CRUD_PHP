<?php

    include 'database/conn.php';
    session_start();
   //if($_SESSION['email']!=null && $_SESSION['email']=="admin@gmail.com")
   if($_SESSION['email']!=null)
   {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    <!-- Sorting And Searching -->
    <div class="row m-5 d-flex justify-content-around">
        <form class="form-group" method="POST">
            <div class="d-inline-block">
                <lable class="form-lable "> Name : </lable>
            </div>
            <div class="d-inline-block">
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="d-inline-block">
                <button class="btn btn-dark ml-4" name="search">Search</button>
            </div>
        </form>
        <form class="form-group" method="POST">
            <div class="d-inline-block">
                <lable class="form-lable"> Sort By : </lable>
            </div>
            <div class="d-inline-block">
                <select class="form-control" name="filter">
                    <option>--Select--</option>
                    <option value="email">Email</option>
                    <option value="name">Name</option>
                </select>
            </div>
            <div class="d-inline-block">
                <button class="btn btn-dark ml-4" name="sort">Sort</button>
            </div>
        </form>
    </div>


    <div class="container">
        <h1 class="text-center my-5">Register Data</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if(isset($_POST['sort']))
                    {
                        $greating=$_POST['filter'];
                        $sql="select * from user order by $greating";
                    }
                    elseif(isset($_POST['search']))
                    {
                        $serching=$_POST['name'];
                        //echo $serching;
                        $sql="select * from user where name like '%$serching%'";

                    }
                    else
                    {
                        $sql="select * from user";
                    }
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc())
                    {

                ?>
                <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><a href="update.php?id=<?php echo $row['id']?>"><i class="material-icons"
                                style="font-size:28px;color:black">edit</i></a>
                    </td>
                    <td><a href="delete.php?id=<?php echo $row['id']?>"><i class="material-icons"
                                style="font-size:28px;color:black">delete</i></a>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
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