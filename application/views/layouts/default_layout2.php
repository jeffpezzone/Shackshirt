
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Overlock+SC|Average+Sans|Ubuntu|Playball|IM+Fell+French+Canon+SC' rel='stylesheet' type='text/css'>

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!--Custom styling on template-->
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 60px;
      }

      /* Custom container */
      /*.container {
        margin: 0 auto;
        max-width: 1000px;
      }*/

      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 50px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar , center text, etc*/
      .navbar .nav {
        display: table;
        width: 100%;
      }

      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }

      .navbar .nav li a {
        font-family: 'Overlock SC', cursive;
        font-size: 20px;
        text-align: center;
      }

      /*.navbar .navbar-inner {
        padding: 0;
      }

      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }*/
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">

    <!--FontAwesome Icons-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">

    <!--JQuery FancyProductDesigner-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jQueryShirtBuilder/smoothness/jquery-ui-1.9.2.custom.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jQueryShirtBuilder/jquery.fancyProductDesigner.css" />
    <!-- Optional - only when you would like to use custom fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jQueryShirtBuilder/jquery.fancyProductDesigner-fonts.css" />
  </head>

  <body>

    <div class="container">
        
        <div id="logo" style="float: left;">
          <h3>Shackshirt Logo</h3>
          <!--<img src="<?php echo base_url(); ?>assets/images/logo.png" height="92" width="100%">-->
        </div>
        <div id="login" style="float: right;">
          <button class="btn btn-login" type="button">Login</button>
        </div>
        <div style="clear: both;"></div>
        <div style="text-align: center;">
          <h4>The no-risk, all-reward way to buy t-shirts online</h4>
        </div>

        <div class="navbar navbar-stackshirt">
          <div class="navbar-inner">
            <div class="container">
         
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
         
              <!-- Be sure to leave the brand out there if you want it shown -->
              <!--<a class="brand" href="#">Stackshirt</a>-->
         
              <!-- Everything you want hidden at 940px or less, place within here -->
              <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                  <li><a href="#" style="font-weight: bold;">The Shack</a></li>
                  <li class="active"><a href="#">Design</a></li>
                  <li><a href="#">Greek Life</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
         
            </div>
          </div>
        </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <p style="font-family: 'Playball', cursive; font-size: 24px;">Design a shirt, set your commission, get paid</p>
        <!--<h1>T-shirt builder</h1>
        <p class="lead">T-shirt building functionality will go here</p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>-->
      </div>

      <!--Content for views using this template-->
      <div id="viewContent">
        <?php echo $content_for_layout; ?>
      </div>

      <!-- Example row of columns -->
      <!--<hr>
      <div class="row-fluid">
        <div class="span4">
          <h2>Promo Ad</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Promo Ad</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Promo Ad</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
      <hr>-->

      <!--content for views-->

      <!--<div class="footer">
        <p>&copy; Company 2013</p>
      </div>-->

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

    <!--JQuery FancyProductDesigner-->
    <script src="<?php echo base_url(); ?>assets/js/jQueryShirtBuilder/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jQueryShirtBuilder/jquery.fancyProductDesigner.min.js" type="text/javascript"></script>

  </body>
</html>