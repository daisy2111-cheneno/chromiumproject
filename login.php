<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body class="bg-primary">
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <img src="images/login.jpg" alt="" width="400" height="350">
                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="grey">Karibu Tena!</h4>
                    </div>
                    <form action="handle_login.php" method="post">
                        <div class="row mb-3">
                            <div>
                                <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div>
                                <input class="form-control rounded-pill" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input class="btn btn-primary rounded-pill" type="submit" name="login" value="Login">
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <a href="" class="rounded-pill btn btn-danger"><i class="fa fa-google"></i> Login with Google</a>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="">Forgot Password</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="">Already have an account? Login</a>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>




</body>
</html>
