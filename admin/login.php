<?php

use App\classes\Login;
//require_once 'app/classes/Login.php';

require_once "../vendor/autoload.php";

$login = new Login();

if(isset($_POST['login'])){
    $login->loginCheck($_POST);
}
//echo $login_error;
?>

<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>detaBase</title>
<h1>Hello DataBase</h1>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Email"/><br/><br/>
        <input type="password" name="password" placeholder="Password"/><br/><br/>
        <input type="submit" value="Save User" name="login"/>

    </form>
    <hr/>  
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form clas="form-signin" action="" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">User Name</label><br/>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="username" placeholder="Enter email address" />
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label><br/>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                            
                                            </div>
                                          
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                
                                            <input class="btn btn-primary" type="submit" value="Save User" name="login"/>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
