<?php
session_start();
define('SITE_URL', 'http://localhost/php-oop-admin_panel/');

$driver = "mysql";
$host = "localhost";
$db_name = "admin_panel_opp";
$db_user = "root";
$db_pass = "mysql";
$charset = 'utf8mb4';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];

require_once('DBConnection.php');
$db = new DBConnection;


function base_url($slug)
{
    echo SITE_URL.$slug;
}

function redirect($message,$page)
{
    $_SESSION['message'] = $message;
    header("Location: ".SITE_URL.$page);
    exit(0);
}