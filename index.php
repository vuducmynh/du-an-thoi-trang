<?php
require_once "model/pdo.php";
require_once "model/danhmuc.php";
require_once "model/sanpham.php";
$dsdm = load_all_danhmuc();
$dssp = load_all_sanpham_hien();


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
                case 'taikhoan':
                        include 'view/taikhoancuatoi.php';
                        break;

                default:
                        include 'view/404.php';
                        break;
        }
} else{
        include('view/home.php');
}

include('view/footer.php');


