<?php
session_start();
if($_SESSION['lang'] == 'bn') $_SESSION['lang'] = 'en';
else $_SESSION['lang'] = 'bn';

header('Location: http://localhost/regBproject/');
?>
