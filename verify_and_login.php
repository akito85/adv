<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('system/login/libraries/password_compatibility_library.php');
}
// include the config
require_once('system/login/config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('system/login/translations/en.php');

// include the PHPMailer library
require_once('system/login/libraries/PHPMailer.php');

// load the registration class
require_once('system/login/classes/Registration.php');

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();

// load the login class
require_once('system/login/classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();


  header("Location: index.php");

//afd42976a150fbee658ad939fa65e94f64c66013
//http://localhost/adv-phase2/adv/verify_and_login.php?id=17&verification_code=afd42976a150fbee658ad939fa65e94f64c66013

?>