<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="MobiPay is an online platform for online payment processing for mobile money users, you can use MobiPay for purchasing or receive payment for online based products or services.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create an Account</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" media="all" href="styles/bootstrap.min.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="scripts/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <style type="text/css">
            /*Style sheet for tooltip*/
            .ui-tooltip {
                width: 210px;
              }

        </style>
        <script>
        //Form tabs
            $(function() {
                $("#tabs").tabs();

                //Date picker
                $( "#datepicker" ).datepicker({
                  changeMonth: true,
                  changeYear: true,
                  showButtonPanel: true,
                  minDate: "-100Y",
                  maxDate: "+16Y",
                  yearRange: "-100:+16"
                });
                $('.tip').tooltip('hide');
            });
        </script>
    </head>

    <body>
        <div class="modal-dialog">
            <h1>
                <small>Claim your account now.</small>
            </h1>

            <div class="modal-content">
                <div class="modal-body">
                    <!-- FORM -->
                    <form class="form-horizontal" role="form" name='submit' action="user/verify.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">Basic information</h4>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="email" class="form-control" id="another" name="email" data-toggle="tooltip" title"What are you registering for?" placeholder="Email address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="telephone" maxlength="11" placeholder="Contact phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="address" placeholder="Address (country, region, street)" required>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" placeholder="Create a password" value="" required>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Re-enter the password" value="" required>
                            </div>
                            <span class="glyphicon glyphicon-question-sign pull-right tip" id="" data-toggle="tooltip" data-trigger="hover" data-placement="left" title="Use at least one numeral and minimum of eight characters."></span>
                        </div>
                        <form class="form-horizontal" role="form" name='submit' action="users/verify.php" method="POST">
                            <div class="modal-header">
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                                <h4 class="modal-title">Financial related information</h4>
                            </div>
                            <hr>
                            <!--Tabs-->
                            <div id="tabs">
                                <ul>
                                    <li>
                                        <a href="#personal">
                                            <b>Personal</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#business">
                                            <b>Business</b>
                                        </a>
                                    </li>
                                    <span class="glyphicon glyphicon-question-sign pull-right tip" id="" data-toggle="tooltip" data-trigger="hover" data-placement="auto left" title="Choose what you are registering for."></span>
                                </ul>
                                <div id="personal">
                                    <!-- PERSONAL TAB CONTENTS -->
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="firstname" placeholder="First  name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" id="datepicker" class="form-control " name="dob" placeholder="Date of birth">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <select id="country" name='operator' class="form-control">
                                                <option class="country">Choose operator in your country</option>
                                                <optgroup label="Kenya" class="">
                                                    <option class="" value="airtel_ke">Airtel Money</option>
                                                    <br>
                                                    <option class="" value="safaricom_ke">M-Pesa</option>
                                                </optgroup>
                                                <optgroup class="" label="Rwanda">
                                                    <br>
                                                    <option class="" value="airtel_rw">Airtel Money</option>
                                                    <option class="" value="mtn_rw">MTN Money</option>
                                                    <option class="" value="tigo_rw">Tigo Cash</option>
                                                </optgroup>
                                                <br>
                                                <optgroup class="" label="Tanzania">
                                                    <option class="" value="airtel_tz">Airtel Money</option>
                                                    <option class="" value="tigo_tz">Tigo Pesa</option>
                                                    <option class="" value="voda_tz">M-Pesa</option>
                                                </optgroup>
                                                <br>
                                                <optgroup class="" label="Uganda">
                                                    <option class="" value="airtel_ug">Airtel Money</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="mm_acc_name" placeholder="Mobile Money Full Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="mm_acc_num" maxlength="11" placeholder="Mobile Money Number (078x89xxx1)" required>
                                        </div>
                                        <span class="glyphicon glyphicon-question-sign pull-right tip" id="" data-toggle="tooltip" data-trigger="hover" data-placement="auto left" title="Enter phone number that is used for mobile money, you can add more later."></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="mm_acc_num" maxlength="11" placeholder="Re-enter Number (078x89xxx1)" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- BUSINESS TAB CONTENTS -->
                                <div id="business">
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="bizname" placeholder="Legal business name
                                            " required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="mm_acc_name" placeholder="Mobile Money Full Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="mm_acc_num" maxlength="11" placeholder="Mobile Money Number (078x89xxx1)" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="mm_acc_num" maxlength="11" placeholder="Re-enter number (078x89xxx1)" required>
                                        </div>
                                    </div>

                                </div><!-- End of business tab contents. -->
                            </div>
                            <div class="form-group">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                    <a href="index.php"><button type="button" class="btn btn-default">Cancel</button></a>
                                </div>
                                <span class="pull-right">By clicking
                                    <span style="font-weight:bold;"> "Sign up"</span>, you agree to our
                                    <a href="#">terms</a> and
                                    <a href="#">privacy policy.</a>
                                </span>
                            </div>
                        </form>
                        </form>
                </div>
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
        <script src="scripts/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/main.js"></script>
        <script src="scripts/holder.js"></script>
        <script src="scripts/carousel.js"></script>
    </body>

</html>