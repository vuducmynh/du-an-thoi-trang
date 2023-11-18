<?php
require_once "model/pdo.php";

// header của trang home không cắt
if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        include 'view/header.php';
        switch ($act) {
                case 'danhsach':
                        include 'view/danhsach.php';
                        break;
                
                case 'chitietsp':
                        include 'view/chitietsanpham.php';
                        break;
                case 'login':
                        include 'view/dangnhapdangky.php';
                        break;

                case 'thanhtoan':
                        include 'view/thanhtoan.php';
                        break;

                case 'giohang':
                        include 'view/giohang.php';
                        break;

                default:
                        include 'view/404.php';
                        break;
        }
} else{
        include('view/home.php');
}

include('view/footer.php');


