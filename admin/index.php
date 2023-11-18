<?php
require_once '../model/pdo.php';
require_once '../model/danhmuc.php';





$act = $_GET['act'] ?? '';
$check = true;
switch ($act) {
    case 'home':
        $VIEW = "home.php";
        break;

    case 'nguoidung':
        $VIEW = "nguoidung/list.php";
        break;
    case 'addnguoidung':
        $VIEW = "nguoidung/add.php";
        break;
    case 'editnguoidung':
        $VIEW = "nguoidung/edit.php";
        break;

    case 'danhmuc':
        $VIEW = "danhmuc/list.php";
        break;
    case 'adddanhmuc':
        $VIEW = "danhmuc/add.php";
        break;
    case 'editdanhmuc':
        $VIEW = "danhmuc/edit.php";
        break;

    case 'sanpham':
        $VIEW = "sanpham/list.php";
        break;
    case 'addsanpham':
        $VIEW = "sanpham/add.php";
        break;
    case 'editsanpham':
        $VIEW = "sanpham/edit.php";
        break;

    case 'binhluan':
        $VIEW = "binhluan/list.php";
        break;
    case 'chitietbinhluan':
        $VIEW = "binhluan/chitietbl.php";
        break;

    default:
        $check = false;
        $VIEW = "404.php";
        break;
}








if ($check) {
    include 'header.php';
    include 'aside.php';
}
include $VIEW;
if ($check) {
    include 'footer.php';
}
