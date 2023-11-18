<?php
require_once '../model/pdo.php';





$act = $_GET['act'] ?? '';
switch ($act) {
    case 'home':
        $VIEW = "dashboard/dashboard.php";
        break;
    case '':
        $VIEW = "dashboard/dashboard.php";
        break;
    case '':
        $VIEW = "dashboard/dashboard.php";
        break;
    case '':
        $VIEW = "dashboard/dashboard.php";
        break;
    case '':
        $VIEW = "dashboard/dashboard.php";
        break;

    default:
        $VIEW = "dashboard/dashboard.php";
        break;
}















include 'header.php';
include 'aside.php';
//include $VIEW;
include 'footer.php';
