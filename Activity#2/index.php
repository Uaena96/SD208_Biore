<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Links -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts Links -->
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>

    <!-- CSS and JS Links -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <title> KPOP PROFILES 2020</title>
</head>

<body>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-0">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">KPOP Profiles
                    2020</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#myModalLogin"
                                class="nav-link text-uppercase font-weight-bold trigger-btn"
                                data-toggle="modal">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Register -->
    <div id="myModalRegister" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="bio.php" method="post">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="Firstname"
                                    required="required">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Lastname"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control boxSpace" name="address" placeholder="Address"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="confirmEmail" placeholder="Confirm Email"
                                required="required">
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password" placeholder="Password"
                                    required="required">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="confirmPassword"
                                    placeholder="Confirm Password" required="required">
                            </div>
                        </div>
                        <br><br>
                        <div class="">
                            <button type="submit"
                                class="btn btn-primary btn-lg btn-block login-btn button">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login -->
    <div id="myModalLogin" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="bio.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="container">
        <center>
            <div class="pt-5 text-white">
                <header class="py-5 mt-5">
                    <h1 class="content">Keep Updated <br> with Your Idols Insformation with <br> KPOP Profiles 2020</h1>
                    <h6>No Account Yet?</h6>
                    <button type="button" class="btn btn-light font-weight-bold">
                        <a href="#myModalRegister" data-toggle="modal" class="text-decoration-none text-dark">Create Account</a>
                    </button>
                </header>
            </div>
        </center>
    </div>
</body>

</html>