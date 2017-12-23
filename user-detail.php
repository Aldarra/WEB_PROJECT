<!DOCTYPE html>
<?php
include "dbconnect.php";
$userID = $_GET['userID'];
$sql = "SELECT * from users where Id = '".$userID."'";
$result = $conn->query($sql);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">
   
     <title>User account </title>


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
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
                <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
   <?php
     while($row = $result->fetch_assoc()){ 
       echo' 
       
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <img src="assets/img/avatar.jpg" alt="">
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
            
           
              <h1><input type="text" id="firstname" value="'. $row["firstname"].'" readonly> <input type="text"  id="lastname" value="'.$row["lastname"].'" readonly> </h1>
     
     </h1>
     <select id="role" disabled>
             ';
             $roles = "Select * from role";
             $resultRoles = $conn->query($roles);
              while($rolesrows = $resultRoles->fetch_assoc()){
                if ($rolesrows["type"] ==  $row["role"]){
                         echo '<option value="'.$rolesrows["type"].'" selected>'.$rolesrows["type"].' </option>';
                } else {
                         echo' <option value="'.$rolesrows["type"].'" >'.$rolesrows["type"].' </option>';
                }
              }
  echo '</select>

            </div>
            <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" id="username" value="'.$row["username"].'" readonly>
                </div>
            <hr>

            <p class="lead"> <textarea rows="4" cols="70" disabled> Short Description about the user will be written here</textarea></p>

            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                <span><input class="small-input" type="text" id="address" value="'.$row["address"].'" readonly> , <input class="small-input" type="text" id="city" value="'.$row["city"].'" readonly>
                , <input type="text"class="small-input" id="country" value="'.$row["country"].'" readonly> </span>
              </li>

              <li>
                <i class="fa fa-globe"></i>
                <a href="'.$row["personalhomepage"].'"> <input type="text" id="personalhomepage" readonly value=" '.$row["personalhomepage"].'">
               </a>
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span> Office Phone:  <input type="text"  id="officephone" value="'.$row["officephone"].'" readonly></span>
              </li>

              <li>
                <i class="fa fa-birthday-cake"></i>
                <span> <input type="text"  id="birthday" value="'.$row["birthdate"].'" readonly></span>
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span>Mobile: <input type="text" id="mobile" value="'.$row["mobile"].'" readonly></span>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <span> <input type="text" id="email" value="'.$row["email"].'" readonly></span>
              </li>
            </ul>

            <div class="tag-list">
              <span>Robots</span>
              <span>Drones</span>
              <span>Teaching</span>
              
            </div>
          </div>
        </div>

        <div class="button-group">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>

          <div class="action-buttons">
            <a class="btn btn-success" data-toggle="modal" data-target="#modal-contact" href="#">Contact me</a>
            <a class="btn btn-gray" name="editBtn">Edit User</a>
            <a class="btn btn-gray" name="saveBtn" style= "display:none;">Save User</a>
            <a class="btn btn-danger" name="deleteBtn" onclick="removeItem(this, 1)">Delete User</a>
             <span name="userID"  value="'.$userID.'" style="display:none;"> '.$userID.'</span> 


          
          </div>
        </div>
      </div>
    </header>
    ';}
    ?>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      
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


    <!-- Contact modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">Send message</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="subject" class="control-label">Subject</label>
                <input type="text" class="form-control" id="subject">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Message</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
