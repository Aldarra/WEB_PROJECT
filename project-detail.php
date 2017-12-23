<!DOCTYPE html>
<?php
include "dbconnect.php";
session_start();
$pid = $_GET['pid'];

$sql = "SELECT * from project where id = '".$pid."'";
$result = $conn->query($sql);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Conferences</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
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
            <a href="index.html">Home</a>
        
          </li>
          <li>
            <a href="projects.php"  class="active" >Projects</a>
           
          <li>
            <a href="conferences.php">Conferences</a>
           
          </li>
          <li>
            <a href="news.php">News</a>
            
          </li>
           <li>
            <a href="users.php">Users</a>
           
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
    <?php
    while($row = $result->fetch_assoc()) {
echo '<header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
      <div class="container">
        <div class="header-detail">
          <img class="logo" src="assets/img/logo-google.jpg" alt="">
          <div class="hgroup">
            <h1>'.$row["name"].'</h1>
            <h3><a href="#"> '.$row["principleInvestigator"].'</a></h3>
          </div>
          <time datetime="2016-03-03 20:00">2 days ago</time>
          <hr>
          <p class="lead">'.$row["description"].'</p>

          <ul class="details cols-3">
            <li> 
             <i class="fa fa-calendar"></i>
            <span>'.$row["startdate"].' -'.$row["enddate"].'</span>
             </li>
              <li>
              <i class="fa fa-money"></i>
               <span>'.$row["budget"].'</span>
                    </li>

                     <li> <i class="attach_money"></i>
                      <span> Funding Agency: '.$row["fundingAgency"].'</span>
                    </li>
           

          

           
            
          </ul>

          <div class="button-group">
            <ul class="social-icons">
              <li class="title">Share on</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <div class="action-buttons">
               <a class="btn btn-gray" href="#">Edit Project</a>
            <a class="btn btn-danger" href="#">Delete Project</a>
            </div>
          </div>

        </div>
      </div>
    </header>
     ';
    }
    ?>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

      <!-- Job detail -->
      
      <!-- END Job detail -->

    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
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

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
