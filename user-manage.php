
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

    <title>Users Page</title>

   <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

   <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav bg-alt">

   <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

       <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.php"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
       <!-- END Logo -->

       <!-- User account -->
        <?php
        if (isset($_SESSION['logged_user'])){
          echo '
           <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Log out</a>
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
            <a href="index.php">Home</a>
        
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
            <a class="active" href="user-manage.php">Users</a>
           
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
     
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>

            </ul>
          </li>
        </ul>
       <!-- END Navigation menu -->

      </div>
    </nav>
   <!-- END Navigation bar -->


   <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Users</h1>
        <p class="lead text-center">Here's the list of the users in the ACM website.</p>
      </div>
    </header>
   <!-- END Page header -->


   <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">

            <div class="col-xs-12 text-right">
              <br>

               <?php 
           
              if(isset($_SESSION['logged_user'])){
                  $userRole = $_SESSION['logged_user']["role"];
                   if($userRole == "Admin"){
                echo '  <a class="btn btn-primary btn-sm" href="user-add.php">Add New User</a>';
              }
              }
              
              
              ?>
            </div>


           <!-- Resume item -->
            <?php

            while($row = $result->fetch_assoc()){
              echo '<div class="col-xs-12">
              <div class="item-block">
                <header>
                 
                  <div class="hgroup">
                    <h4><a href="user-detail.php?userID='.$row["Id"].'"> '.$row["firstname"].' ' .$row["lastname"].'</a></h4>
                    <h5>'.$row["role"].'</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">'.$row["address"].', ' .$row["city"].', '.$row["country"].'</span>
                    <i class="fa fa-phone"></i><span> '.$row["mobile"].'</span>
                  </div>
                </header>

                <footer>

                  <div class="action-btn">
                    <a class="btn btn-xs btn-gray" >Hide</a>
                    <a class="btn btn-xs btn-danger" name="deleteBtn" onclick="removeItem(this, 0)" >Delete</a>
                    <span name="userID"  style="display:none;"> '.$row["Id"].'</span> 
                  </div>
                </footer>
              </div>
            </div>
            ';
            }
            ?>
        
<!-- END Resume item -->


          </div>
        </div>
      </section>
    </main>
   <!-- END Main container -->


   <!-- Site footer -->
    <footer class="site-footer">

     <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">ACM, the Association for Computing Machinery ,is the world's largest educational and scientific society, uniting computing educators, researchers and professionals to inspire dialogue, share resources and address the field's challenges. ACM strengthens the profession's collective voice through strong leadership, promotion of the highest standards, and recognition of technical excellence. ACM supports the professional growth of its members by providing opportunities for life-long learning, career development, and professional networking.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
     <!-- END Top section -->

     <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved by <a href="http://themeforest.net/user/shamsoft">ShaMSofT</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
     <!-- END Bottom section -->

    </footer>
   <!-- END Site footer -->


   <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
   <!-- END Back to top button -->

<!--// Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
