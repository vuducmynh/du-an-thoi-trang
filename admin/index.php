<?php
require_once '../model/pdo.php';
require_once '../model/danhmuc.php';
require_once '../model/sanpham.php';
$dsdm = load_all_danhmuc();
$dssp = load_all_sanpham();



$act = $_GET['act'] ?? '';
$check = true;
switch ($act) {
    case 'home':
        $VIEW = "home.php";
        break;

    case 'danhmuc':
        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
            delete_danhmuc($iddm);
            header("location: ?act=danhmuc");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $iddm = $_POST['id'];
            delete_danhmuc_multi_item($iddm);
            header("location: ?act=danhmuc");
        }
        $VIEW = "danhmuc/list.php";
        break;
    case 'adddanhmuc':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tendanhmuc = $_POST['tendanhmuc'];
            $trangthai = $_POST['trangthai'];
            insert_danhmuc($tendanhmuc,$trangthai);
            header("location: ?act=danhmuc");
        }
        $VIEW = "danhmuc/add.php";
        break;
    case 'editdanhmuc':
        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
            $dm = load_one_danhmuc($iddm);
            extract($dm);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tendanhmuc = $_POST['tendanhmuc'];
                $trangthai = $_POST['trangthai'];
                update_danhmuc($iddm,$tendanhmuc,$trangthai);
                header("location: ?act=danhmuc");
            }
            $VIEW = "danhmuc/edit.php";
        }
        break;

    case 'sanpham':
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            delete_sanpham($idsp);
            header("location: ?act=sanpham");
        }
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $idsp = $_POST['id'];
        //     delete_danhmuc_multi_item($idsp);
        //     header("location: ?act=sanpham");
        // }
        $VIEW = "sanpham/list.php";
        break;
    case 'addsanpham':
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $tensanpham = $_POST['tensanpham'];
            $img = $_FILES['hinh'];
            $thuonghieu = $_POST['thuonghieu'];
            $kichco = $_POST['kichco'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $madanhmuc = $_POST['madanhmuc'];
            $trangthai = $_POST['trangthai'];
            $mota = $_POST['mota'];
            $hinh = null;
            if (empty($img['name'])) {
                $hinh = time() . '_' . $img['name'];
                move_uploaded_file($img['tmp_name'], "../assets/images/product/" . $hinh);
            }
            insert_sanpham($tensanpham,$hinh,$thuonghieu,$kichco,$soluong,$gia,$mota,$madanhmuc,$trangthai);
            header('location: ?act=sanpham');
            
        }
        $VIEW = "sanpham/add.php";
        break;
    case 'editsanpham':
        $VIEW = "sanpham/edit.php";
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
