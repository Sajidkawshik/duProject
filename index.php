<?php

require 'html/body/body_parts/aside.php';
require 'html/body/body_parts/header.php';
require 'html/body/body_parts/dashboard.php';
require 'html/body/body.php';
require 'html/head/head.php';

session_start();
if (isset($_SESSION["lang"])) {
	$lang = $_SESSION["lang"];
} else {
	$_SESSION["lang"] = "en";
}

$lang = $_SESSION["lang"];
require "locale/" . $lang . "/" . $lang . ".php";

//header
$header_list = array('lang' => $lang, 'list' => array());
$temp_header = new Header($header_list);
$header = $temp_header->getHeader();

//right menu
$aside_list = array('lang' => $lang, 'list' => array());
$temp_aside = new Aside($aside_list);
$aside = $temp_aside->getAside();

//dashboard
$dashboard_list = array('lang' => $lang, 'list' => array());
$temp_dashborad_list = new Dashboard($dashboard_list);
$dashboard = $temp_dashborad_list->getDashboard();

//head
$head_list = array('lang' => $lang, 'list' => array());
$temp_head_list = new Head($head_list);
$head = $temp_head_list->getHead();

//body
$body_parts = array('header' => $header, 'aside' => $aside, 'dashboard' => $dashboard);
$temp = new Body($body_parts);
$body = $temp->getBody();

//make index
$index = $head;
$index .= $body;

//show index
echo $index;
?>