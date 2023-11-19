<?php
function load_all_sanpham()
{
    $sql = "SELECT sanpham.*, tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.madanhmuc=danhmuc.id ORDER BY id DESC";
    return pdo_query($sql);
}

function load_all_sanpham_hien()
{
    $sql = "SELECT sanpham.*, tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.madanhmuc=danhmuc.id WHERE sanpham.trangthai = 1 ORDER BY id DESC";
    return pdo_query($sql);
}

function load_one_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}
function insert_sanpham($tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai)
{
    $sql = "INSERT INTO sanpham(tensanpham, hinh, thuonghieu, kichco, soluong, gia, mota, madanhmuc, trangthai) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai);
}
function update_sanpham($id, $tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai)
{
    $sql = "UPDATE sanpham SET tensanpham=?, hinh=?, thuonghieu=?, kichco=?, soluong=?, gia=?, mota=?, madanhmuc=?, trangthai=? WHERE id=?";
    pdo_execute($sql, $tensanpham, $hinh, $thuonghieu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai, $id);
}
//Xóa cứng
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=?";
    pdo_execute($sql, $id);
}
function delete_sampham_multi_item($id) {
    $masp = '';
    foreach ($id as $item) {
        $masp .= $item . ", ";
    }
    //Xóa dấu thừa (,) ở bên phải
    $masp = rtrim($masp, ", ");
    $sql = "DELETE FROM sanpham WHERE id IN ($masp)";
    pdo_execute($sql);
}
//Xóa mềm
function delete_sanpham_mem($id)
{
    $sql = "UPDATE sanpham SET trangthai=0 WHERE id=?";
    pdo_execute($sql, $id);
}
