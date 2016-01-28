<?php session_start(); ?>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!--[if IE]>
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <![endif]-->
      <title>Bootstrap user profile template</title>
      <!-- BOOTSTRAP STYLE SHEET -->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLE CSS -->
      <style type="text/css">
         .btn-social {
            color: white;
            opacity: 0.8;
         }

         .btn-social:hover {
            color: white;
            opacity: 1;
            text-decoration: none;
         }

         .btn-facebook {
            background-color: #3b5998;
         }

         .btn-twitter {
            background-color: #00aced;
         }

         .btn-linkedin {
            background-color: #0e76a8;
         }

         .btn-google {
            background-color: #c32f10;
         }
      </style>
   </head>
   <body>
      <div class="navbar navbar-default navbar-static-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav ">
                  <li><a href="indexuser.php">HOME</a></li>
               </ul>
            </div>

         </div>
      </div>
      <!-- NAVBAR CODE END -->


      <div class="container">
         <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
               <div class="col-md-4">
                  <img src="assets/img/250x250.png" class="img-rounded img-responsive" />
                  <br />
                  <br />
                  <a class='btn btn-primary' href=''>
                     Choose profile pic...
                     <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                  </a>
                  <br /><br/>
               </div>
               <div class="col-md-8">
                  <!--                    <div class="alert alert-info">
                                          <h2>User Bio : </h2>
                                          <h4>Bootstrap user profile template </h4>
                                          <p>
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                               3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                          </p>
                                      </div>-->
                  <!--                    <div >
                                          <a href="#" class="btn btn-social btn-facebook">
                                              <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                                          <a href="#" class="btn btn-social btn-google">
                                              <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                                          <a href="#" class="btn btn-social btn-twitter">
                                              <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                                          <a href="#" class="btn btn-social btn-linkedin">
                                              <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                                      </div>-->
                  <div class="form-group col-md-8">
                     <form method="post" action="changePass.php">
                        <h3>Change YOur Password</h3>
                        <br />
                        <label>Enter Old Password</label>
                        <input type="password" class="form-control" name="password">
                        <label>Enter New Password</label>
                        <input type="password" class="form-control" name="newpassword">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" name="renewpassword"/>
                        <br>
                        <a href="#" class="btn btn-warning">Change Password</a>
                     </form>
                     <br/><br/>
                     <form method="get" action="editme.php">
                        <label>Registered Username</label>
                        <input type="text" class="form-control" name="username">
                        <label>Registered Email</label>
                        <input type="text" class="form-control" name="email">
                        <label>Registered Address</label>
                        <input type="text" class="form-control" name="address">
                        <label>Registered Birth</label>
                        <input type="text" class="form-control" name="birth">
                        <label>Registered Job</label>
                        <input type="text" class="form-control" name="job">
                        <label>Registered Credit Limit</label>
                        <input type="text" class="form-control" name="credit">
                        <br>
                        <a href="#" class="btn btn-success">Update Details</a>
                     </form>
                  </div>
               </div>
            </div>
            <!-- ROW END -->


         </section>
         <!-- SECTION END -->
      </div>
      <!-- CONATINER END -->

      <!-- REQUIRED SCRIPTS FILES -->
      <!-- CORE JQUERY FILE -->
      <script src="assets/js/jquery-1.11.1.js"></script>
      <!-- REQUIRED BOOTSTRAP SCRIPTS -->
      <script src="assets/js/bootstrap.js"></script>
   </body>

</html>
