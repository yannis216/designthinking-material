<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Best Design Thinking self-stick-notes</title>

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
            <li class="active"><a href="postits.php">Post-Its</a></li>
            <li><a href="pens.php">Pens</a></li>
            <li><a href="prototyping.php">Prototyping</a></li>

            <li><a  href="privacypolicy.php">Datenschutz</a></li>
            <li><a  href="impressum.php">Impressum</a></li>
          </ul>
          <div class="tab-content">
            <div id="postits" class="tab-pane fade in active">
              <div class="row">
                <div class="row">
                  <div class="col-md-12 tab-head">
                    <h1>Design Thinking Sticky Notes</h1>
                    Sticky notes are essential for a productive Design Thinking Session. Why sticky notes for Design Thinking? They are small and therefore invite to write short notes. They are movable. They are coloured (and invite to be creative).
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Different Sizes</h2>
                      Differently sized post its are suited for different use-cases. Having only the rectangle sticky notes will be enough in most cases. However, offering some more sizes will add some eye candy.
                      <div class="row">
                        <div class="col-md-12 category-body">
                          <ul class="list-group">
  <!-- Anfang Normal squared -->
                            <li class="list-group-item">Squared Standard Size
                              <a class="buy pull-right" target="_blank" href="<?php echo $postitsq_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#postitsq">More info</a>
                            </li>
                              <div id="postitsq" class="collapse">
                                <div class="description_container">
                                  <?php echo $postitsq_desc; ?>
                                </div>
                                <?php echo $postitsq_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#postitsq">Collapse</a>
                              </div>
  <!-- Anfang Postitrect -->
                            <li class="list-group-item">Rectangle 76x127mm
                              <a class="buy pull-right" target="_blank" href="<?php echo $postitrect_link; ?>">Amazon</a>
                              <a class="more pull-right" data-toggle="collapse" href="#postitrect">More info</a>
                            </li>
                              <div id="postitrect" class="collapse">
                                <div class="description_container">
                                  <?php echo $postitrect_desc; ?>
                                <a href="postits.php"> on our site for Design Thinking sticky notes</a>.
                                </div>
                                <?php echo $postitrect_picture; ?> </br>
                                <a class="" data-toggle="collapse" href="#postitrect">Collapse</a>
                              </div>
<!-- Anfang Big Rectangle -->
                          <li class="list-group-item">Big Rectangle 200x149mm
                            <a class="buy pull-right" target="_blank" href="<?php echo $postitbigrect_link; ?>">Amazon</a>
                            <a class="more pull-right" data-toggle="collapse" href="#postitbigrect">More info</a>
                          </li>
                            <div id="postitbigrect" class="collapse">
                              <div class="description_container">
                                <?php echo $postitbigrect_desc; ?>
                              </div>
                              <?php echo $postitbigrect_picture; ?> </br>
                              <a class="" data-toggle="collapse" href="#postitbigrect">Collapse</a>
                            </div>
                        </ul>
                  </div>
                </div>


  <!-- Anfang Brands -->
                  <div class="row">
                    <div class="col-md-12 category-head">
                      <h2>Different Brands</h2>
                      Of course, there is more than one brand that produces sticky notes. The well known brad "Post-It" offers sticky notes in all varieties. Their products are of good quality but a little pricy. A well know alternative are the low budget sticky notes made by Tartan. It seems like the colour of their notes do not shine as bright as the post-its, but they still serve every need a Design Thinkier should have.
                      <ul>
                        <li><a class="buy" target="_blank" href="<?php echo $postitpostit_link; ?>">Post-Its on Amazon</a></li>
                        <li><a class="buy" target="_blank" href="<?php echo $postittartan_link; ?>">Tartan sticky notes on Amazon</a></li>
                      </ul>

                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            </br>
            </br>
            <a rel="nofollow" href="http://www.amazon.de/gp/product/B000I5SC16/ref=as_li_tl?ie=UTF8&camp=1638&creative=19454&creativeASIN=B000I5SC16&linkCode=as2&tag=dtmaterial-21"><img border="0" src="http://ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000I5SC16&Format=_SL250_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=dtmaterial-21" ></a><img src="http://ir-de.amazon-adsystem.com/e/ir?t=dtmaterial-21&l=as2&o=3&a=B000I5SC16" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

          </div>
        </div>
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
