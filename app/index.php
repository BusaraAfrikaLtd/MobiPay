<!DOCTYPE html>
<html>
    <!--[if lt IE 7]>
        <html class="no-js lt-ie9 lt-ie8 lt-ie7">
        <![endif]-->
        <!--[if IE 7]>
            <html class="no-js lt-ie9 lt-ie8">
            <![endif]-->
            <!--[if IE 8]>
                <html class="no-js lt-ie9">
                <![endif]-->
                <!--[if gt IE 8]>
                    <!-->
                    <!-- <html class="no-js"> -->
                <!--<![endif]-->

                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="description" content="MobiPay is an online platform for online payment processing for mobile money users, you can use MobiPay for purchasing or receive payment for online based products or services.">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>MobiPay-Online payment in easy way</title>
                    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
                    <link rel="shortcut icon" href="favicon.png" type="image/x-png">
                    <link href='http://fonts.googleapis.com/css?family=Nixie+One|Julius+Sans+One' rel='stylesheet' type='text/css'>
                    <link type="text/css" rel="stylesheet" media="all" href="styles/bootstrap.min.css">
                    <link type="text/css" rel="stylesheet" href="styles/main.css">
                    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                </head>

                <body>
                    <!-- FIXED NAVIGATION BAR-->
                    <div id="nav" class="navbar navbar-inverse menubar navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="pull-right collapse navbar-collapse">
                                <ul id="scrollspy" class="nav navbar-nav">
                                    <li title="Home">
                                        <a>Home</a>
                                    </li>
                                    <li title="About">
                                        <a href="about.php">About</a>
                                    </li>
                                    <li title="Merchants">
                                        <a href="merchants.php">Merchants</a>
                                    </li>
                                    <li title="How it works">
                                        <a href="support.php">Learn</a>
                                    </li>
                                    <li title="Contact">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--CAROUSEL-->
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active font-effect-3d-float">
                                <img src="images/sample.png">
                                <div class="container">
                                    <div id="iframe" class="hero">
                                        <!--embeded video-->
                                        <img  src="images/MobiPay_logo.png">
                                        <iframe src="//player.vimeo.com/video/3203266?color=ff0179" width="600" height="337" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <h1>Online payment in easy way using mobile money.</h1>
                                        <label>
                                            <form class="form-inline" role="form" action="login.php" method="POST">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" name="loginemail" placeholder="Enter email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" name="loginpass" placeholder="Password" required>
                                                </div>
                                                <button type="submit" class="btn btn-large btn-success">Log in</button>&emsp;or
                                                <!--Link trigger for signup model-->
                                                <a href="register.php">Join us today&rarr;</a>
                                            </form>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/sample.png">
                                <div class="container">
                                    <div class="hero container">
                                        <label class="container">
                                            <img src="images/mtn.jpg" height="70px">
                                            <img src="images/airtel.jpg" height="70px">
                                            <img src="images/tigo.jpg" height="70px">
                                        </label>
                                        <h1>Our mobile money partners.</h1>
                                        <p>
                                            <a data-toggle="modal" class="btn btn-lg btn-success" href="#partners">View in your country</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/sample.png">
                                <div class="container">
                                    <div class="hero">
                                        <h1>Who trusts us.</h1>
                                        <p>
                                            <a class="btn btn-lg btn-success" href="#">Browse</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="pull-left glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="pull-right glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <!-- /.carousel -->

                    <!--PERTNERS-->
                    <div id="partners" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Our mobile money partners</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Kenya</h3>
                                    <img src="images/0airtel.jpg" height="70em">&emsp;
                                    <img src="images/0safare_ke.jpg" height="70em">
                                    <hr>
                                    <h3>Rwanda</h3>
                                    <img src="images/0airtel.jpg" height="70em">&emsp;
                                    <img src="images/0mtn-rw.jpg" height="70em">&emsp;
                                    <img src="images/0tigo_rw.jpg" height="70em">
                                    <hr>
                                    <h3>Tanzania</h3>
                                    <img src="images/0airtel.jpg" height="70em">&emsp;
                                    <img src="images/0voda_tz.jpeg" height="70em">&emsp;
                                    <img src="images/0tigo_tz.jpg" height="70em">
                                    <hr>
                                    <h3>Uganda</h3>
                                    <img src="images/0airtel.jpg" height="70em">&emsp;
                                    <img src="images/0mtn_ug.jpg" height="70em">
                                    <hr>
                                </div>
                                <!--<div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>--></div>
                        </div>
                    </div>
                    <!--FOOTER-->
                    <div id="footer" class="container">
                        <hr>
                        <p>&copy; 2013 Busara Afrika Ltd. &middot;
                            <a href="#">Privacy Policy</a>&emsp;
                            <a href="#">API</a>&emsp;
                            <a href="#">Support</a>
                            <span class="pull-right">
                                <a href="http://www.facebook.com">
                                    <img src="images/facebook.png" height="30em">
                                </a>
                                <a href="#">
                                    <img src="images/twitter.png" height="30em">
                                </a>
                            </span>
                        </p>
                        <hr>
                    </div>
                    <!-- END WRAPPED CONTENT-->
                    <script src="scripts/jquery.js"></script>
                    <script src="scripts/bootstrap.min.js"></script>
                    <script src="scripts/main.js"></script>
                    <script src="scripts/holder.js"></script>
                    <script src="scripts/carousel.js"></script>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                </body>

                </html>