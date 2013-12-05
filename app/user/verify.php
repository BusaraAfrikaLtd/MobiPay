<?php require '../includes/dbconnection.inc.php' ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="shortcut icon" href="../favicon.png" type="image/x-png">
        <link rel="icon" href="favicon.png" type="image/x-png">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" media="all" href="../styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../styles/main.css">
    </head>

    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                    <h2 class="modal-title">Registration Process.</h2>
                </div>
                <div class="modal-body">
                    <p>Registration process was done succefully. Activate your account by entering code below that you've received via sms through your mobile phone.</p>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>



       <?php
            #####################################
            #                                   #
            #   CUSTOMER REGISTRATION PROCESS   #
            #                                   #
            ####################################

    if (isset($_POST[ 'firstname'])
        && isset($_POST[ 'lastname'])
        && isset($_POST[ 'email'])
        && isset($_POST[ 'telephone'])
        && isset($_POST[ 'address'])
        && isset($_POST[ 'password'])
        && isset($_POST[ 'operator'])
        && isset($_POST[ 'mm_acc_name'])
        && isset($_POST[ 'mm_acc_num'])
        && isset($_POST[ 'dob'])) {


        $firstname=$_POST[ 'firstname'];
        $lastname=$_POST[ 'lastname'];
        $email=$_POST[ 'email'];
        $telephone=$_POST[ 'telephone'];
        $address=$_POST[ 'address'];
        $password=$_POST[ 'password'];
        $operator=$_POST[ 'operator'];
        $mm_acc_name=$_POST[ 'mm_acc_name'];
        $mm_acc_num=$_POST[ 'mm_acc_num'];
        $dob=$_POST[ 'dob'];

       $password_hash = md5($password);

     }
?>

<?php

    $query="INSERT INTO customers (
 		`firstname`,
 		`lastname`,
 		`dob`,
 		`operator`,
 		`email`,
 		`hashed_password`,
 		`contact`,
 		`mm_full_name`,
 		`address`,
 		`mm_acc_num`)
	VALUES (
		'{$firstname}',
		'{$lastname}',
		'{$dob}',
		'{$operator}',
		'{$email}',
		'{$password_hash}',
		'{$telephone}',
		'{$mm_acc_name}',
		'{$address}',
		'{$mm_acc_num}')" ;


     if ($query) {
        mysqli_query($dbconnect, $query);
    }else{

        die();
    }

?>


<?php
    //THIS IS ADDING COUNTRY CODES TO THE PHONE NUMBES AND MOBILE MONEY ACCOUNTS.
     switch ($operator) {
            case 'airtel_ke':

            case 'safaricom_ke':

               break;

            case 'airtel_rw':
            case 'mtn_rw':
            case 'tigo_rw':
               $telephone = "+". 250 . ltrim($telephone, '0');
               $mm_acc_num = "+". 250 . ltrim($mm_acc_num, '0');
               break;

            case 'airtel_tz':
            case 'tigo_tz':
            case 'voda_tz':
               $telephone = "+". 255 . ltrim($telephone, '0');
               $mm_acc_num = "+". 255 . ltrim($mm_acc_num, '0');
               break;

            case 'voda_ug':
               $telephone = "+". 256 . ltrim($telephone, '0');
               $mm_acc_num = "+". 256 . ltrim($mm_acc_num, '0');
               break;

            default:
               # code...
               break;
       }

    $query="INSERT INTO customers (
        `firstname`,
        `lastname`,
        `dob`,
        `operator`,
        `email`,
        `hashed_password`,
        `contact`,
        `mm_full_name`,
        `address`,
        `mm_acc_num`)
    VALUES (
        '{$firstname}',
        '{$lastname}',
        '{$dob}',
        '{$operator}',
        '{$email}',
        '{$password_hash}',
        '{$telephone}',
        '{$mm_acc_name}',
        '{$address}',
        '{$mm_acc_num}')" ;


     if ($query) {
        mysqli_query($dbconnect, $query);
    }else{

        die();
    }

?>
    </body>

</html>