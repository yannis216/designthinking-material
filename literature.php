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
          <ul class="nav nav-pills nav-justified">
            <li><a href="index.php">Bundles</a></li>
            <li  class="active"><a href="literature.php">Literature</a></li>
            <li><a href="whiteboards.php">Whiteboards</a></li>
            <li><a href="postits.php">Notes</a></li>
            <li><a href="pens.php">Pens</a></li>
            <li><a href="prototyping.php">Prototyping</a></li>
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Legal <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a  href="privacypolicy.php">Datenschutz</a></li>
                <li><a  href="impressum.php">Impressum</a></li>
              </ul>
            </li>
          </ul>
          <div class="tab-content">
            <div id="postits" class="tab-pane fade in active">
              <div class="row">
                <div class="row">
                  <div class="col-md-12 tab-head">
                    <h1>Recommended Literature <div class="fb-share-button" data-href="http://designthinking-material.com/literature.php" data-layout="button_count"></div></h1>
                    There is a lot of well-written content for Design Thinking. Here is a small selection of books that are recommendable as a good start.
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Mindset & Best Practices</h2>
                      Those books will give you some deeper insights into the mindset and techniques of Design Thinking.
                      <div class="row">
                        <div class="col-md-12 category-body">
                          <ul class="list-group">
<!-- Anfang Mindset Books -->
                            <li class="list-group-item">In 30 Minutes (German)
                              <a class="buy pull-right" target="_blank" href="<?php echo $minutesdt_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#minutesdt">More info</a>
                            </li>
                              <div id="minutesdt" class="collapse">
                                <div class="description_container">
                                  <?php echo $minutesdt_desc; ?>
                                </div>
                                <?php echo $minutesdt_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#minutesdt">Collapse</a>
                              </div>
                            <!-- Anfang Durch die Decke denken -->
                            <li class="list-group-item">Durch die Decke Denken... (German)
                              <a class="buy pull-right" target="_blank" href="<?php echo $durchdecke_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#durchdecke">More info</a>
                            </li>
                              <div id="durchdecke" class="collapse">
                                <div class="description_container">
                                  <?php echo $durchdecke_desc; ?>
                                </div>
                                <?php echo $durchdecke_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#durchdecke">Collapse</a>
                              </div>
                              <!--Anfang Network Thinking -->
                              <li class="list-group-item">Network Thinking (German)
                                <a class="buy pull-right" target="_blank" href="<?php echo $netthink_link; ?>">Amazon</a>
                                <a class="more pull-right" data-toggle="collapse" href="#netthink">More info</a>
                              </li>
                                <div id="netthink" class="collapse">
                                  <div class="description_container">
                                    <?php echo $netthink_desc; ?>
                                  </div>
                                  <?php echo $netthink_picture; ?> </br>
                                  <a class="" data-toggle="collapse" href="#netthink">Collapse</a>
                                </div>
                                <!-- Anfang Change by Design -->
                                <li class="list-group-item">Change by Design...
                                  <a class="buy pull-right" target="_blank" href="<?php echo $changedt_link; ?>">Amazon</a>
                                  <a class="more pull-right" data-toggle="collapse" href="#changedt">More info</a>
                                </li>
                                  <div id="changedt" class="collapse">
                                    <div class="description_container">
                                      <?php echo $changedt_desc; ?>
                                    </div>
                                    <?php echo $changedt_picture; ?> </br>
                                    <a class="" data-toggle="collapse" href="#changedt">Collapse</a>
                                  </div>
                            </ul>
                          </div>
                        </div>
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
