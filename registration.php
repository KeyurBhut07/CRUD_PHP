<?php

   include 'database/conn.php' ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <link rel="stylesheet" href="style.css" />
    <title>LOGIN PAGE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    .error {
        color: red;
        padding: 5px;
    }
    </style>
</head>

<body style="background-color: rgb(78, 104, 219)">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="box_color card rounded">
                        <div class="card-body p-5">
                            <form id="mform" action="#" method="POST" class="m-2">
                                <p class="h3 text-center mb-4 text-dark">Sign Up</p>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email"
                                        name="email" />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" id="phone"
                                        name="phone" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password" />
                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        id="cpassword" name="cpassword" />
                                </div>

                                <!-- <div class="form-group">
                    <label for="imahe">Picture</label>
                    <input
                      type="file"
                      class="form-control"
                      placeholder="Re-  Password"
                      id="pwd"
                    />
                  </div> -->
                                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>

                                <p class="text-center mt-1">
                                    Already Account
                                    <a href="index.php"><b>Sign In</b></a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery validation CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    jQuery("#mform").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            phone: {
                required: true,
                minlength: 10
            },
            cpassword: {
                required: true,
                minlength: 8,
            },
        },
        messages: {
            name: "Enter Your Name..!",
            email: {
                required: "Please Enter Your Email Address...!",
                email: "Please Enter Valid Email Address...!",
            },
            password: {
                required: "Please Enter Your Strong Password...!",
                minlength: "Enter Minimum 8 Charcater",
            },
            phone: {
                reuired: "Enter Your Phone Number...!",
                minlength: "Phone Number must be 10 Digit..!"
            },
            cpassword: {
                required: "Please Enter Your Strong Password...!",
                minlength: "Enter Minimum 8 Charcater",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
    </script>
</body>

</html>

<?php
   
   if($_POST['submit']) 
   {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $phone=$_POST['phone'];    

        if($password != $cpassword)
        {
            echo "<script>alert('Password Does Not Match')</script>";
        }
        else
        {
            $sql = "INSERT into user (name,email,password,phone) values ('$name','$email','$password','$phone')";
            $res= $conn->query($sql);
            // //$res = mysqli_query($conn,$sql);
            if($res>0)
            {
                echo "<script>alert('Register Successfully...')</script>";
                echo "<script>window.location.href='index.php'</script>";
            }
            else
            {
                echo "<script>alert('Try Again...')</script>";
            }
               
        }
        

   }

?>