
<?php


 ?>
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
                    <meta name="description" content="Open communicated society that listens to customers. Tell us something or visit our offices.">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Contact Us</title>
                    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
                    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                    <link rel="icon" href="favicon.ico" type="image/x-icon">
                    <link type="text/css" rel="stylesheet" media="all" href="styles/bootstrap.min.css">
                    <link type="text/css" rel="stylesheet" href="styles/main.css">
                    <!-- <link style="text/css" rel="stylesheet" href="styles/footer-navbar.css"> -->
                </head>

                <body>
                    <!-- FIXED NAVIGATION BAR-->
                    <div id="nav" class="navbar navbar-inverse menubar navbar-static-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php">
                                    <img src="images/MobiPay_logo.png" width="62%">
                                </a>
                            </div>
                            <div class="pull-right collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li title="Home">
                                        <a href="index.php">Home</a>
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
                                    <li title="Contact" class="active">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="strip-bar"></div>
                    <!-- PAGE CONTENTS -->
                   <div class="container">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Contact Us</h4>
                            </div>
                            <div class="modal-body row">

                                <form  id="feedback" class="form-horizontal" action="contact.php" name="comments" method="post" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="comm_name" placeholder="Your name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="comm_email" placeholder="Your email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <textarea cols="60" rows="8" id="comments" class="form-control" name="comments" placeholder="Put your nice comments here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 pull-left">
                                            <button type="submit" class="btn btn-lg btn-success">Send</button>
                                        </div>
                                    </div>

                                </form>
                        </div>
                    </div>


                    <!--FOOTER-->
                    <div id="footer" class="container">
                        <hr>
                        <p>&copy; 2013 Busara Afrika Ltd. &middot;
                            <a href="#">Privacy</a>&emsp;
                            <a href="#">Terms</a>&emsp;
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
                    <script src="scripts/holder.js"></script>
                    <script src="scripts/carousel.js"></script>
                    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
                </body>

                </html>
                <?php //Closing DB connection. // if (isset($dbconnect)) { // mysqli_close($dbconnect); // } ?>