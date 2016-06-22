<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Best Design Thinking pens</title>

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
            <li><a href="literature.php">Literature</a></li>
            <li><a href="whiteboards.php">Whiteboards</a></li>
                      <!--  <li><a href="furniture.php">Furniture</a></li> -->
            <li><a href="postits.php">Notes</a></li>
            <li class="active"><a href="pens.php">Pens</a></li>
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
            <div id="pens" class="tab-pane fade in active">
              <div class="row">
                <div class="row">
                  <div class="col-md-12 tab-head">
                    <h1>Design Thinking Pens <div class="fb-share-button" data-href="http://designthinking-material.com/pens.php" data-layout="button_count"></div></h1>
                    There are many different kinds and brands of pens that are suited for Design Thinking. However, there are certain characteristics a perfect Design Thinking pen should have.
                    They should be coloured, not to thin or to thick and markers have to be removable from whiteboards.
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Most used</h2>
                      As there are so many alternatives for Design Thinking pens we will just present the two most used Design Thinking pens and explain why they are the best Design Thinking pens.
                      <div class="row">
                        <div class="col-md-12 category-body">
                          <ul class="list-group">
                            <!-- Anfang Whiteboard Marker -->
                                    <li class="list-group-item">Whiteboard Marker
                                      <a class="buy pull-right" target="_blank" href="<?php echo $whitemarker_link; ?>">Amazon</a>
                                      <a class="more pull-right" data-toggle="collapse" href="#whitemarker">More info</a>
                                    </li>
                                      <div id="whitemarker" class="collapse">
                                        <div class="description_container">
                                          <?php echo $whitemarker_desc; ?>
                                        </div>
                                        <?php echo $whitemarker_picture; ?> </br>
                                        <a class="" data-toggle="collapse" href="#whitemarker">Collapse</a>
                                      </div>
                            <!-- Anfang Stabilopens -->
                                    <li class="list-group-item">Stabilo pen 68
                                      <a class="buy pull-right" target="_blank" href="<?php echo $stabilopens_link; ?>">Amazon</a>
                                      <a class="more pull-right" data-toggle="collapse" href="#stabilopens">More info</a>
                                    </li>
                                      <div id="stabilopens" class="collapse">
                                        <div class="description_container">
                                          <?php echo $stabilopens_desc; ?>
                                        </div>
                                        <?php echo $stabilopens_picture; ?> </br>
                                        <a class="" data-toggle="collapse" href="#stabilopens">Collapse</a>
                                      </div>
                      </ul>

                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            </br>
            </br>
            <a rel="nofollow" href="http://www.amazon.de/gp/product/B0007OEE1K/ref=as_li_tl?ie=UTF8&camp=1638&creative=19454&creativeASIN=B0007OEE1K&linkCode=as2&tag=dtmaterial-21"><img border="0" src="http://ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0007OEE1K&Format=_SL250_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=dtmaterial-21" ></a><img src="http://ir-de.amazon-adsystem.com/e/ir?t=dtmaterial-21&l=as2&o=3&a=B0007OEE1K" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />


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
