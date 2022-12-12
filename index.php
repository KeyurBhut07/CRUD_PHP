<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/js/bootstrap.min.js" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>LOGIN PAGE</title>
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
                            <form id="mform" class="m-3" action="auth.php" method="POST">
                                <!-- <?php
                                        if(isset($_GET['error']))
                                        {
                                            echo "<p style='color:red'>".$_GET['error']."</p>";
                                        }
                                    ?> -->
                                <img class="img-fluid" src="img/login.png" alt="" />
                                <p class="h3 text-center mb-4 text-dark">Sign In</p>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        id="email" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        id="password" />
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" />
                                        Remember me
                                    </label>
                                </div>

                                <button type="submit" name="login" value="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>

                                <p class="text-center mt-3">
                                    Don't have an account
                                    <a href="registration.php"><b>Sign Up</b></a>
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
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
        },
        messages: {
            email: {
                required: "Please Enter Your Email Address...!",
                email: "Please Enter Valid Email Address...!",
            },
            password: {
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