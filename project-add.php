<!DOCTYPE html>

<?php
include "dbconnect.php";
session_start();

?>
           
            
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title> Add New Conference</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>"

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
            <a href="index.php">Home</a>
        
          </li>
          <li>
            <a  class="active" href="projects.php">Projects</a>
           
          <li>
            <a href="conferences.php">Conferences</a>
           
          </li>
          <li>
            <a href="news.php">News</a>
            
          </li>
           <li>
            <a href="#">Users</a>
           
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

    <form action="addConference.php" method="POST">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add New Project </h1>
        </div>

        <div class="container">

          <div class="row">
            
            </div>

            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="name" placeholder="Project Name">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="location" placeholder="Funding Agency">
              </div>
              <div class="form-group">Start Date:
                <input type="date" class="form-control" name="startdate" >
              </div>
              <div class="form-group">End Date:
                <input type="date" class="form-control" name="enddate">
              </div>
              

              
               <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Description">
              </div>
            
              <div class="form-group">
                <input type="text" class="form-control" name="principleInvestigator" placeholder="Principle Investigator">
              </div>
               
              <div class="form-group">
                <input type="text" class="form-control" name="coinvestigators" placeholder="Co Investigator">
              </div>
                <div class="form-group">
                <input type="text" class="form-control" name="budget" placeholder="Budget">
              </div>


              <hr class="hr-lg">

              
              <div class="row">


               
               
                


                  <p class="text-center"><button class="btn btn-success btn-xl btn-round">Add Project</button></p>

                   <!-- END Page header -->


     



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

              
              
              
           
