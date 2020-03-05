<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
--- Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang="en">

    <title>Login form</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="demo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<script src="jquery/jquery.min.js"></script>
        ---- jquery link local dont forget to place this in first than other script or link or may not work 
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        - boostrap.min link local ----->
        
        <link rel="stylesheet" href="multilingual2.css">
        <script type="text/javascript" src="demo.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!---- boostrap.min link local ----->

        <!--<script src="js/bootstrap.min.js"></script>
     Boostrap js link local ----->
        
        <!--<link rel="icon" href="images/icon.png" type="image/x-icon" />
         Icon link local -->
        
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!---- Font awesom link local ----->
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa fa-book" aria-hidden="true"></i> EasyToLearn</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="fun">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="demo.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NEWS</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <!--<li class="nav-item">
                    <a href="multilingual2.html"><button type="button" class="btn btn-success">Login</button></a>
                </li>-->
                <li>
                    <a href="login.html"><button type="button" class="btn btn-outline-info"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i> Login</button></a>
                </li>
            </ul>
    </nav>
    <div class="container-fluid">
        <div class="container container-xyz">
            <!--<h2 class="text-center" id="title">Facundo farm and Resort</h2>
             <p class="text-center">
                <small id="passwordHelpInline" class="text-muted"> Developer: follow me on facebook <a href="https://www.facebook.com/JheanYu"> John niro yumang</a> inspired from <a href="https://p.w3layouts.com/">https://p.w3layouts.com/</a>.</small>
            </p>-->
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <form role="form" method="post" action="register.php">
                        <fieldset>                          
                            <p class="text-uppercase pull-center"> SIGN UP.</p> 
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                            </div>
                                <div class="form-group">
                                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  By Clicking register you're agree to our policy & terms
                                </label>
                              </div>
                            <div>
                                      <input type="submit" class="btn btn-primary   value="Register">
                            </div>
                        </fieldset>
                    </form>
                </div>
                
                <div class="col-md-2">
                    <!-------null------>
                </div>
                
                <div class="col-md-5">
                        <form role="form">
                        <fieldset>                          
                            <p class="text-uppercase"> Login using your account: </p>   
                                
                            <div class="form-group">
                                <input type="email" name="username" id="username" class="form-control input-lg" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                            </div>

                            <div>
                                <a href="demo.html"><button type="button" class="btn btn-primary">Sign In</button></a>
                            </div>
                                 
                        </fieldset>
                        <?php
                        session_start();
                        $con=mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"users");
                            $id=$_POST["id"];
                            $username=$_POST["username"];
                            $password=$_POST["password"];

                            $s = "select * from users where username='$username'";
                            $result=mysqli_query($con,$s);
                            $num=mysqli_num_rows($result);

                            if($num==1){
                                echo "Username already taken";
                            }
                            else{
                                $reg="Insert into users(id,username,password) values ('$id','$username','$password')";
                                mysqli_query($con,$reg);
                                echo "registration successful";
                            }
                        ?>

                </form> 
                </div>
            </div>
        </div>
        <!--<p class="text-center">
            <small id="passwordHelpInline" class="text-muted"> Developer:<a href="http://www.psau.edu.ph/"> Pampanga state agricultural university ?</a> BS. Information and technology students @2017 Credits: <a href="https://v4-alpha.getbootstrap.com/">boostrap v4.</a></small>
        </p>-->
    </div>
    </body>
     

</html>