<?php
    
    include 'database/conn.php';
    session_start();
    if($_SESSION['email']!=null)
    {
        $id = $_GET['id'];
        // echo $id;
        $sql = "delete from user where id='$id'";
        $res = mysqli_query($conn,$sql);
        if($res>0)
        {
            echo "<script>alert('Record Delete Successfully')</script>";
            echo "<script>window.location.href='display.php'</script>";
        }
        else
        {
            echo "<script>alert('Try Again...!')</script>";
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>
<?php
    }
    else
    {
        echo "<script>alert('Please Login In This Website ...!')</script>";
    }
?>