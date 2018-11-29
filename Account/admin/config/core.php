<?php 

//show error reporting
error_reporting(E_ALL);

//start php session
session_start();

//set the default time-zone
date_default_timezone_set('America/Denver');

//home page url
$home_url = "http://localhost/php-login-script-level-1/";

//page given in url parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

//set number of records per page
$records_per_page = 5;

//calculate the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
?>