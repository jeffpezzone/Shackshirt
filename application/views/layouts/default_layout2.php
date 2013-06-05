
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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!--Custom styling on template-->
    <style type="text/css">
      body {
        /*padding-top: 10px;
        padding-bottom: 60px;*/
        /*background: url(/assets/images/jQueryExample/bg.png) repeat;*/


        /*background-image: -webkit-gradient(linear, left top, left bottom, from(#F0F0F0), to(#A8A8A8 ));
        background-image: -webkit-linear-gradient(top, #F0F0F0, #A8A8A8 );
        background-image: -moz-linear-gradient(top, #F0F0F0, #A8A8A8 ); 
        background-image: -ms-linear-gradient(top, #F0F0F0, #A8A8A8 ); 
        background-image: -o-linear-gradient(top, #F0F0F0, #A8A8A8 ); 
        background-image: linear-gradient(top, #F0F0F0, #A8A8A8 );*/
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
        margin: 40px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        margin: 20px 0;
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


      div#slogan {
        padding-top: 40px;
      }
      div#slogan #red {
        color: red;
      }
      div#slogan #green {
        color: green;
      }
      div#login {
        padding-top: 20px;
        text-align: right;
      }
    </style>

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

    <!--JQuery FancyProductDesigner EXAMPLE-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jQueryShirtBuilder/main.css">
  </head>

  <body>

      <!--Container-->
      <div class="container">

        <!--Top: Logo, Slogan, Login/Register buttons-->
        <div class="row-fluid">
          <!--Logo-->
          <div id="logo" class="span4">
            <a href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assets/images/Web-Logo_1.png"></a>
          </div>
          <!--Slogan-->
          <div id="slogan" class="span6">
            <h4>The <span id="red">no-risk</span>, <span id="green">all-reward</span> way to buy t-shirts online</h4>
          </div>
          <!--Login/Register-->
          <div id="login" class="span2">

            <!--If session does not exist, display Log In/Register buttons-->
            <?php 
              $sessionUser = $this->session->userdata('username');
              //if (!isset($sessionUser)) { 
              if ($this->session->userdata("username") == ""){
                ?>
            <a id="loginButton" href="#loginModal" role="button" class="btn btn-login" data-toggle="modal">Login</a>
            <a id="registerButton" href="#registerModal" role="button" class="btn btn-login" data-toggle="modal">Register</a>
            <!--Otherwise, display Logout button-->
            <?php } else{  ?>
             <b>Welcome <?php echo $this->session->userdata('username'); ?></b> &nbsp;<a href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
             <?php } ?>
          </div>
        </div>

        <!--Login Modal (Popup)-->
        <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Sign In</h3>
          </div>
          <div class="modal-body">
            <form id="login" class="form-horizontal" method="post">
              <div class="controls">
                <input type="text" name="loginUsername" id="loginUsername" placeholder="Username">
              </div>
              <div class="controls">
                <input type="password" name="loginPassword" id="loginPassword" placeholder="Password">
              </div>

              <!--Error messages will go here on invalid login-->
              <div id="loginErrorMessage">
              </div>

          </div>
          <div class="modal-footer">
            <button  id="loginSubmit" class="btn btn-login" type="submit">Sign In</button>
          </div>
        </form>
        </div>


        <!--Register Modal (Popup) -->
        <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Sign Up</h3>
          </div>
          <div class="modal-body">
            <form id="register" class="form-horizontal" method="post">
              <div class="controls">
                <input type="text" name="registerFirstName" id="registerFirstName" placeholder="First Name">
              </div>
              <div class="controls">
                <input type="text" name="registerLastName" id="registerLastName" placeholder="Last Name">
              </div>
              <div class="controls">
                <input type="text" name="registerUsername" id="registerUsername" placeholder="Username">
              </div>
              <div class="controls">
                <input type="text" name="registerEmail" id="registerEmail" placeholder="Email">
              </div>
              <div class="controls">
                <input type="password" name="registerPassword" id="registerPassword" placeholder="Password">
              </div>
              <div class="controls">
                <input type="password" name="registerPassword2" id="registerPassword2" placeholder="Confirm Password">
              </div>

              <!--Error messages will go here on invalid registration-->
              <div id="registerErrorMessage">
              </div>

          </div>
          <div class="modal-footer">
            <button id="registerSubmit" class="btn btn-login" type="submit">Sign Up</button>
          </div>
        </form>
        </div>

        <!--Main navbar-->
        <div class="navbar navbar-shackshirt">
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
        <p style="font-family: 'Playball', cursive; font-size: 30px;">Design a shirt, set your commission, get paid</p>
        <!--<h1>T-shirt builder</h1>-->
        <p class="lead">
          Here at <b>Shackshirt</b>, you create your own design.
        </p>
        <!--<a class="btn btn-large btn-success" href="#">Get started today</a>-->
        <a class="btn btn-large btn-login" href="#">Get started today</a>
      </div>

      <!--Load view content-->
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

      <div class="footer">
        <p>&copy; Shackshirt 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

    <!--JQuery FancyProductDesigner-->
    <script src="<?php echo base_url(); ?>assets/js/jQueryShirtBuilder/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jQueryShirtBuilder/jquery.fancyProductDesigner.min.js" type="text/javascript"></script>

    <!--Main custom JS file, used for everything else (besides bootstrap, jQuery shirt builder, etc..)-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


    <!--This eventually needs to be removed, and placed only on Design Tab-->
    <script type="text/javascript">
  
      jQuery(document).ready(function() {
        
        //call the plugin and save it in a variable to have access to the API
        var fpd = $('#fpd').fancyProductDesigner({
          editorMode: false,
          fonts: ['Arial', 'Helvetica', 'Times New Roman', 'Verdana', 'Geneva', 'Fearless'],
          //these are the parameters for the text that is added via the "Add Text" button
          customTextParamters: {x: 210, y: 250, colors: "#000000", removable: true, resizable: true, draggable: true, rotatable: true}
        })
        .data('fancy-product-designer');
        
        //get current price when product is created and update it when price changes
        $('#fpd')
        .bind('productCreate', function(evt){
          $('#thsirt-output').html('Click the "Checkout" button to see the returning object with all properties.');
          $('#thsirt-price').text(fpd.getPrice());
        })
        .bind('priceChange', function(evt, price, currentPrice) {
          $('#thsirt-price').text(currentPrice);
        });
        
        //button to print the product
        $('#print-button').click(function(){
          fpd.print();
          return false;
        });
        
        //button to print the product
        $('#checkout-button').click(function(){
          //get only editable elements
          var product = fpd.getProduct(true);
          var output = '';
          //check if product is an array (different views)
          if(product instanceof Array) {
            //loop through all views
            for(var i=0; i < product.length; ++i) {
              output += _getProductOutput(product[i]);
            }
          }
          else {
            //just a single product without views
            output = _getProductOutput(product);
          }
          
          $('#thsirt-output').html(output);
          
          return false;
        });
        
        //recreate products
        $('#recreation-button').click(function(){
          var product = fpd.getProduct(false);
          $('#recreation-form input:first').val(JSON.stringify(product)).parent().submit();
          return false;
        });
        
        //click handler for input upload
        $('#upload-button').click(function(){
          $('#design-upload').click();
          return false;
        });
        
        //upload image
        document.getElementById('design-upload').onchange = function (e) {
          if(window.FileReader) {
            var reader = new FileReader();
              reader.readAsDataURL(e.target.files[0]); 
              reader.onload = function (e) {
                var image = new Image;
                image.src = e.target.result;
                image.onload = function() {
                
                  //max. width and height for the uploaded image
                  var maxWidth = 200,
                    maxHeight = 320,
                    scaling = 1;
                  
                  //calculate scaling
                  if(this.width > maxWidth && this.width > this.height) {
                    scaling = maxWidth / this.width;
                  }
                  if(this.height > maxHeight  && this.height > this.width) {
                    scaling = maxHeight / this.height;
                  }
                  //add new image to product
                  fpd.addElement('image', e.target.result, 'my custom design', {colors: '#000000', zChangeable: true, removable: true, draggable: true, resizable: true, rotatable: true, x: 200, y: 200, scale: scaling.toFixed(2)});    
                };                         
            };
          }
          else {
            alert('FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!')
          }
        };
        
        //format a product object for the output panel
        function _getProductOutput(product) {
          var output = '<strong>Product:</strong> '+product.title;
          
          output += '<br /><strong>Elements:</strong>';
          output += '<p>';
          $(product.elements).each(function(i, elem) {
            output += '<strong>Title:</strong> ' + elem.title;
            output += '<br />';
            output += '<strong>Parameters:</strong><br />';
            for (var prop in elem.parameters) {
                output += prop + ": " + elem.parameters[prop] + ', ';
             }
             output = output.substring(0, output.length-2);
             output += '<br /><br />';
          });
          output += '</p>';
          return output;
        };
      });
  </script>
  </body>
</html>