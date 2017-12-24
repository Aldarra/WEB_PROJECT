<!DOCTYPE html>

<?php
include "dbconnect.php";
session_start();
$sql = "Select * from users";
$result = $conn->query($sql);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title> Add User</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <?php
          if (isset($_SESSION['logged_user'])){
          echo '
           <div class="pull-right user-login">
          <a class="btn btn-sm btn-danger" href="user-login.html">Log out</a>
            </div>
               ';
          }
        else {
          echo ' 
          <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        ';

        }
        ?>
        <!-- END User account -->

        <!-- Navigation menu -->
                <ul class="nav-menu">
          <li>
            <a href="index.html">Home</a>
        
          </li>
          <li>
            <a href="projects.php">Projects</a>
           
          <li>
            <a href="conferences.php">Conferences</a>
           
          </li>
          <li>
            <a href="news.php">News</a>
            
          </li>
           <li>
            <a class="active" href="#">Users</a>
           
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
     
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>

            </ul>
          </li>
        </ul> <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->

    <form action="addUser.php" method="POST">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Register New User </h1>
        </div>

        <div class="container">

          <div class="row">
            
            </div>

            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="firstname" placeholder="First Name">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
               <div class="form-group">
                <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password">
              </div>
              <div class="form-group">
                <select  class="form-control selectpicker" name="role" data-placeholder="Role">
                  <option value="Student">Student</option>
                  <option value="Member">Member</option>
                  <option value="Senior_member">Senior Member</option>
                  <option value="Director">Director</option>
                  <option value="Admin">Admin</option>
                </select>
              </div>
              <div class="form-group"> Birthday
                <input type="date" class="form-control" name="birthday">
              </div>

              <hr class="hr-lg">

              <h6>Basic information</h6>
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" class="form-control" name="personalhomepage" placeholder="Personal Website address">
                  </div>
                </div>

               
                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                  </div>
                </div>
                
                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" name="officephone" placeholder="Office Phone Number">
                  </div>
                </div>


                 <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" class="form-control" name="city" placeholder="city">
                  </div>
                </div>

                 <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" class="form-control" name="country" placeholder="Country">
                  </div>
                </div>


                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email address">
                  </div>
                </div>

              </div>
                  <p class="text-center"><button class="btn btn-success btn-xl btn-round">Submit your resume</button></p>

                   <!-- END Page header -->


      <!-- Main container -->
      


        <!-- Social media -->



        <!-- Education -->
       <!-- END Education -->


        <!-- Work Experience -->
        <!-- END Work Experience -->


        <!-- Skills -->
       <!-- END Skills -->



        <!-- Submit -->
        
      <!-- END Main container -->

    </form>

    <!-- Site footer -->
        <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
