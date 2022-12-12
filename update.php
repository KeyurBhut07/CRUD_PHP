<?php
    include 'database/conn.php';
    session_start();
    if($_SESSION['email']!=null)
    {
        $id = $_GET['id'];
        //echo $id;
        $query = "select * from user where id='$id'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_array($res);
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 m-5 ">
                <table class="table table-bordered align-items-center">
                    <form role="form" method="POST">
                        <tr class="text-center">
                            <th colspan="2">Update your data</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>
                                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="text" class="form-control" name="password"
                                    value="<?php echo $row['password']?>">
                            </td>
                        </tr>

                        <tr>
                            <td colspan=2 class="text-center">
                                <button class="btn btn-primary mr-4" name="reset">Reset</button>
                                <button class="btn btn-success" name="update">Update</button>
                                <button class="btn btn-dark ml-4" name="back">Back</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['back']))
{
    echo "<script>window.location.href='display.php'</script>";
}

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="update user set name='$name',email='$email',phone='$phone',password='$password' where id='$id' ";
    $res=mysqli_query($conn,$query);
    if($res>0)
    {
        echo "<script>alert('Record Update Successfully')</script>";
        echo "<script>window.location.href='display.php'</script>";
    }
    else
    {
        echo "<script>alert('Try Again...!')</script>";
    }
}

}
else
{
    header("Location:index.php");
    exit();
}

?>