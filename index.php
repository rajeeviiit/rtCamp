<?php
if (!session_id()) {
    session_start();
}
if (isset($_SESSION['fb_access_token'] )) {
    header('location: http://localhost/rtcamp/home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="">
    <title>Facebook Album</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="text-center">Facebook Album</h1>
</div>
<?php
include "config.php";
$helper = $fb->getRedirectLoginHelper();
$permissions = array('email', 'user_photos');
$loginUrl = $helper->getLoginUrl($redirect, $permissions);
?>
<center><a class="btn btn-success" href="<?php echo $loginUrl; ?>">Login with Facebook</a></center>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>