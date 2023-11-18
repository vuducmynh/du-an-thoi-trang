<?php

function load_all_sanpham()
{
    $sql = "SELECT sanpham.*, tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.madanhmuc=danhmuc.id WHERE trangthai = 1 ORDER BY id DESC";
    return pdo_query($sql);
}

function load_one_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}
function insert_sanpham($tensanpham, $hinh, $thuongheu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai)
{
    $sql = "INSERT INTO sanpham(tensanpham, hinh, thuongheu, kichco, soluong, gia, mota, madanhmuc, trangthai) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $tensanpham, $hinh, $thuongheu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai);
}
function update_sanpham($id, $tensanpham, $hinh, $thuongheu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai)
{
    $sql = "UPDATE sanpham SET tensanpham=?, hinh=?, thuongheu=?, kichco=?, soluong=?, gia=?, mota=?, madanhmuc=?, trangthai=? WHERE id=?";
    pdo_execute($sql, $tensanpham, $hinh, $thuongheu, $kichco, $soluong, $gia, $mota, $madanhmuc, $trangthai, $id);
}
//Xóa cứng
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=?";
    pdo_execute($sql, $id);
}

//Xóa mềm
function delete_sanpham_mem($id)
{
    $sql = "UPDATE sanpham SET trangthai=0 WHERE id=?";
    pdo_execute($sql, $id);
}
