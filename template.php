<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Design Thinking Material</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="dtstyle.css" rel="stylesheet">

      <?php
        include("products.php");
      ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php include_once("analyticstracking.php") ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 header">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 role="navigation"">
          <ul class="nav nav-tabs nav-justified">
            <li><a href="index.php">Bundles</a></li>
            <li><a href="whiteboards.php">Whiteboards</a></li>
            <li><a href="furniture.php">Furniture</a></li>
            <li class="active"><a href="postits.php">Post Its</a></li>
            <li><a href="pens.php">Pens</a></li>
            <li><a href="prototyping.php">Prototyping</a></li>

            <li><a  href="privacypolicy.php">Datenschutz</a></li>
            <li><a  href="impressum.php">Impressum</a></li>
          </ul>
          <div class="tab-content">
            <div id="postits" class="tab-pane fade in active">
              Postits
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
