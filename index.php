<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DT Material</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="dtstyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 header">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 role="navigation"">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#bundles">Bundles</a></li>
            <li><a data-toggle="tab" href="#whiteboards">Whiteboards</a></li>
            <li><a data-toggle="tab" href="#postits">Post Its</a></li>
            <li><a data-toggle="tab" href="#pens">Pens</a></li>
            <li><a data-toggle="tab" href="#prototyping">Prototyping</a></li>
            <li><a data-toggle="tab" href="#contact">Contact</a></li>
            <li><a data-toggle="tab" href="#impressum">Impressum</a></li>
          </ul>
          <div class="tab-content">
            <div id="bundles" class="tab-pane fade in active">
              <?php
                include("bundles.php");
              ?>
            </div>
            <div id="whiteboards" class="tab-pane fade">
              <?php
                include("whiteboards.php");
              ?>
            </div>
            <div id="postits" class="tab-pane fade">
              <?php
                include("postits.php");
              ?>
            </div>
            <div id="pens" class="tab-pane fade">
              <?php
                include("pens.php");
              ?>
            </div>
            <div id="prototyping" class="tab-pane fade">
              <?php
                include("prototyping.php");
              ?>
            </div>
            <div id="contact" class="tab-pane fade">
              <?php
                include("contact.php");
              ?>
            </div>
            <div id="impressum" class="tab-pane fade">
              <?php
                include("impressum.php");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
