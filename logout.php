<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 28/10/17
 * Time: 12:30 AM
 */

session_unset();
$_SESSION['facebook_access_token'] = NULL;
$_SESSION = array();
session_destroy();
