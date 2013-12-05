<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="MobiPay is an online platform for online payment processing for mobile money users, you can use MobiPay for purchasing or receive payment for online based products or services.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" media="all" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/main.css">
    </head>

    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                    <h2 class="modal-title">Registration Process.</h2>
                </div>
                <div class="modal-body">
                    <p>Registration process was done succefully. Activate your account by entering the code below you've received via sms.</p>
                    <!-- FORM -->
                    <form class="form-horizontal" role="form" name='submit' action="create_user.php" method="POST">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="activate" placeholder="Code here" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                            </div>
                    </form>
                    </div>
                </div>
    </body>

</html>