<?php
require_once '../model/pdo.php';
require_once '../model/danhmuc.php';
require_once '../model/sanpham.php';
require_once '../model/nguoidung.php';
require_once '../model/binhluan.php';
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
            insert_danhmuc($tendanhmuc, $trangthai);
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
                update_danhmuc($iddm, $tendanhmuc, $trangthai);
                header("location: ?act=danhmuc");
            }
            $VIEW = "danhmuc/edit.php";
        }
        break;
    
    //SẢN PHẨM
    case 'sanpham':
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            delete_sanpham($idsp);
            header("location: ?act=sanpham");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idsp = $_POST['id'];
            delete_sampham_multi_item($idsp);
            header("location: ?act=sanpham");
        }
        $VIEW = "sanpham/list.php";
        break;
    case 'addsanpham':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
            if (!empty($img['name'])) {
                $hinh = time() . '_' . $img['name'];
                move_uploaded_file($img['tmp_name'], "../assets/images/product/" . $hinh);
            }
            insert_sanpham($tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai);
            header('location: ?act=sanpham');
        }
        $VIEW = "sanpham/add.php";
        break;
    case 'editsanpham':
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            $sp = load_one_sanpham($idsp);
            extract($sp);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tensanpham = $_POST['tensanpham'];
                $img = $_FILES['hinh'];
                $thuonghieu = $_POST['thuonghieu'];
                $kichco = $_POST['kichco'];
                $soluong = $_POST['soluong'];
                $gia = $_POST['gia'];
                $madanhmuc = $_POST['madanhmuc'];
                $trangthai = $_POST['trangthai'];
                $mota = $_POST['mota'];
                if (!empty($img['name'])) {
                    $hinh = time() . '_' . $img['name'];
                    move_uploaded_file($img['tmp_name'], "../assets/images/product/" . $hinh);
                }
                update_sanpham($idsp,$tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai);
                header('location: ?act=sanpham');
            }
            $VIEW = "sanpham/edit.php";
        }
        break;

        // NGƯỜI DÙNG
    case 'nguoidung':
        if (isset($_GET['idnd'])) {
            $idnd = $_GET['idnd'];
            delete_nguoidung($idnd);
            header("Location: ?act=nguoidung");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idnd = $_POST['id'];
            delete_nguoidung_multi_item($idnd);
            header("Location: ?act=nguoidung");
        }
        $nguoidung = load_all_nguoidung();
        $VIEW = "nguoidung/list.php";
        break;
    case 'addnguoidung':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $sodienthoai = $_POST['sodienthoai'];
            $diachi = $_POST['diachi'];
            $hinh = $_FILES['hinh']['name'];
            $target_dir = "../assets/images/user/";
            $target_file = $target_dir . basename($_FILES['hinh']['name']);
            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            $gioitinh = $_POST['gioitinh'];
            $capbac = $_POST['capbac'];
            $trangthai = $_POST['trangthai'];
            insert_nguoidung_admin($email, $matkhau, $hoten, $sodienthoai, $diachi,$hinh,$gioitinh,$capbac,$trangthai);
            header("Location: ?act=nguoidung");
        }
        $VIEW = "nguoidung/add.php";
        break;
    case 'editnguoidung':
        if (isset($_GET['idnd'])) {
            $idnd = $_GET['idnd'];
            $nd = load_one_nguoidung($idnd);
            extract($nd);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $idnd = $_POST['idnd'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $sodienthoai = $_POST['sodienthoai'];
                $diachi = $_POST['diachi'];
                $gioitinh = $_POST['gioitinh'];
                $capbac = $_POST['capbac'];
                $trangthai = $_POST['trangthai'];
                $img = $_FILES['hinh'];

                if (!empty($img['name'])) {
                    $hinh = time() . '_' . $img['name'];
                    move_uploaded_file($img["tmp_name"], "../assets/images/user/" . $hinh);
                }
               
                update_nguoidung($idnd, $email, $matkhau, $hoten, $sodienthoai, $diachi, $hinh, $gioitinh, $capbac, $trangthai);
                header("Location: ?act=nguoidung");
            }
            $VIEW = "nguoidung/edit.php";
        }
        break;
    case 'binhluan':
        $binhluan = load_all_binhluan_sanpham();
        $VIEW = "binhluan/list.php";
        break;
    case 'chitietbinhluan':
        if (isset($_GET['masanpham'])) {
            $masanpham =$_GET['masanpham'];
            $blct = load_all_binhluan_chitiet($masanpham);
        }
        if (isset($_GET['maxoa'])) {
            $masanpham =$_GET['xoa'];
            deletet_binhluan($masanpham);
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            delete_binhluan_multi_item($id);
            header("Location: ?act=binhluan");
        }
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
