<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Service</title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/style.css" rel="stylesheet">

</head>

<body>
    <?php 
        require 'koneksi.php';
        $sql = 'SELECT * FROM users';
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card bg-login py-4 pl-5 pr-5 o-hidden border-0  my-5" style="top:0;bottom:0;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 bg-login d-none d-lg-block ">
                                <div class="f-tittle1">
                                    Web <span class="color-primary"><strong>Service</strong></span>
                                </div>
                                <div class="img-login">
                                    <img class="w-100" style="vertical-align: middle;"
                                        src="assets/img/WebService.jpg" alt="webservice">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card shadow-login">
                                    <div class="py-5 pl-4 pr-4">
                                        <div class="text-Left mb-5">
                                            <h1 class="h4 text-gray-900  mb-2">Login </h1>
                                            <!-- <p class="color-silver">Does’t have account yet?
                                                <a href="register.html">
                                                    <span class="color-primary">
                                                        <strong>Sign up</strong>
                                                    </span>
                                                </a>
                                            </p> -->
                                        </div>
                                        
                                        <form class="user">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="email" class="form-control form-control-user"
                                                    name="username"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                            </div>
                                            <?php while($users = mysqli_fetch_object($result)) { ?>
                                                <tr>
                                                    <!-- <td> <?php echo $users->id; ?> </td> -->
                                                    <td> <?php echo $users->username; ?> </td>
                                                    <td> <?php echo $users->password; ?> </td>
                                                    <!-- <td> <?php echo $product->quantity; ?> </td>
                                                    <td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td> -->
                                                </tr>
                                                <?php } ?>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck">
                                                    <label class="custom-control-label color-silver"
                                                        for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div> -->
                                            <a href="login.php">Login</a>
                                            <!-- <div class="custom-btn btn-md btn-primary btn-block mt-4"> Login -->
                                            <!-- </div> -->
                                            </a>
                                        </form>
                                        <!-- <div class="text-center mt-2">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>