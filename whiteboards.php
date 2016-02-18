<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Whiteboards and alternatives for Design Thinking</title>

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
            <li  class="active"><a href="whiteboards.php">Whiteboards</a></li>
                      <!--  <li><a href="furniture.php">Furniture</a></li> -->
            <li><a href="postits.php">Post-Its</a></li>
            <li><a href="pens.php">Pens</a></li>
            <li><a href="prototyping.php">Prototyping</a></li>

            <li><a  href="privacypolicy.php">Datenschutz</a></li>
            <li><a  href="impressum.php">Impressum</a></li>

          </ul>
          <div class="tab-content">
            <div id="whiteboards" class="tab-pane fade in active">
              <div class="row">
                <div class="row">
                  <div class="col-md-12 tab-head">
                    <h1>Design Thinking Whiteboards & Alternatives <div class="fb-share-button" data-href="http://designthinking-material.com/whiteboards.php" data-layout="button_count"></div></h1>
                    Every effective Design Thinking session needs lots of rewriteable space. If you do not care about the money, classic moveable whiteboards are for you.
                    However, there are many creative and cheap alternatives for whiteboards. Those low budget alternatives for whiteboards are even more flexible and mobile.
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Classic Whiteboards</h2>
                      There are the typical whiteboards you will find in many businesses and schools. Additionally, there is a collection of whiteboards designed speifically for Design Thinking.
                      <div class="row">
                        <div class="col-md-12 category-body">
                          <ul class="list-group">
<!-- Anfang Classic Whiteboards -->
                            <li class="list-group-item">Old-School Whiteboards
                              <a class="buy pull-right" target="_blank" href="<?php echo $classicwhite_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#classicwhite">More info</a>
                            </li>
                              <div id="classicwhite" class="collapse">
                                <div class="description_container">
                                  <?php echo $classicwhite_desc; ?>
                                </div>
                                <?php echo $classicwhite_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#classicwhite">Collapse</a>
                              </div>
  <!-- Anfang DTLine Whiteboards -->
                            <li class="list-group-item">DTLine - Whiteboards
                              <a class="buy pull-right" target="_blank" href="<?php echo $dtlinewhite_link; ?>">Website</a>
                              <a class="more pull-right" data-toggle="collapse" href="#dtlinewhite">More info</a>
                            </li>
                              <div id="dtlinewhite" class="collapse">
                                <div class="description_container">
                                  <?php echo $dtlinewhite_desc; ?>
                                </div>
                                <a class="" data-toggle="collapse" href="#classicwhite">Collapse</a>
                              </div>
                          </ul>
                    </div>
                  </div>
<!-- Anfang Alternativen -->
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Alternatives to Whiteboards</h2>
                      There are many ways to get rewriteable workspace for less money. thoese alternatives to whiteboards cost way less and offer a lot.
                      <div class="row">
                        <div class="col-md-12 category-body">
                          <ul class="list-group">
<!-- Anfang Easyflip -->
                            <li class="list-group-item">EasyFlip Whiteboard Foil
                              <a class="buy pull-right" target="_blank" href="<?php echo $easyflip_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#easyflip">More info</a>
                            </li>
                              <div id="easyflip" class="collapse">
                                <div class="description_container">
                                  <?php echo $easyflip_desc; ?>
                                <a href="whiteboards.php"> on our page for whiteboards and alternatives</a>.
                                </div>
                                <?php echo $easyflip_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#easyflip">Collapse</a>
                              </div>
  <!-- Anfang Brown Paper -->
                            <li class="list-group-item">Brown Paper
                              <a class="buy pull-right" target="_blank" href="<?php echo $brownpaper_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#brownpaper">More info</a>
                            </li>
                              <div id="brownpaper" class="collapse">
                                <div class="description_container">
                                  <?php echo $brownpaper_desc; ?>
                                </div>
                                <?php echo $brownpaper_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#brownpaper">Collapse</a>
                              </div>
<!-- Anfang Room in Box -->
                          <li class="list-group-item">Room in a box - Cardboard Whiteboards
                            <a class="buy pull-right" target="_blank" href="<?php echo $roominabox_link; ?>">Website</a>
                            <a class="more pull-right" data-toggle="collapse" href="#roominabox">More info</a>
                          </li>
                            <div id="roominabox" class="collapse">
                              <div class="description_container">
                                <?php echo $roominabox_desc; ?>
                              </div>
                              <a class="" data-toggle="collapse" href="#roominabox">Collapse</a>
                            </div>
                          </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            </br>
            </br>
            <a rel="nofollow" href="http://www.amazon.de/gp/product/B002SB2YP8/ref=as_li_tl?ie=UTF8&camp=1638&creative=19454&creativeASIN=B002SB2YP8&linkCode=as2&tag=dtmaterial-21"><img border="0" src="http://ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B002SB2YP8&Format=_SL250_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=dtmaterial-21" ></a><img src="http://ir-de.amazon-adsystem.com/e/ir?t=dtmaterial-21&l=as2&o=3&a=B002SB2YP8" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

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
