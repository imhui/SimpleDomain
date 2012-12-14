<?php
header( "Content-type: text/html; charset=utf-8" );

include 'config/global_config.php';
ini_set("display_errors", ENVIRONMENT == 'DEVELOPMENT' ? 1 : 0);

include 'config/access_token_config.php';
include 'source/auth.php';
include 'library/mysql.class.php';


$allConfig = parse_ini_file('config/dbconfig.ini', true);
$dbConfig = $allConfig[ENVIRONMENT];

$dbAdapter = new mysql($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database'], $dbConfig['conn'], $dbConfig['coding']);
$dbAdapter->show_tables($dbConfig['database']);



$ac = isset( $_GET['ac'] ) && trim( $_GET['ac'] ) != '' ? $_GET['ac'] : 'home';

include_once "./source/{$ac}.php";
