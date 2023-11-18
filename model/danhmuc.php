<?php
function load_all_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function load_one_danhmuc($id){
    $sql = "SELECT * FROM danhmuc where id=?";
    return pdo_query_one($sql,$id);
}

function insert_danhmuc($tendanhmuc,$trangthai){
    $sql = "INSERT INTO danhmuc(tendanhmuc,trangthai) values(?,?)";
    pdo_execute($sql,$tendanhmuc,$trangthai);
}

function update_danhmuc($id, $tendanhmuc, $trangthai){
    $sql = "UPDATE danhmuc SET tendanhmuc=?, trangthai=? where id=?";
    pdo_execute($sql, $tendanhmuc, $trangthai, $id);
}

function delete_danhmuc($id){
    $sql ="DELETE FROM danhmuc WHERE id=?";
    pdo_execute($sql, $id);
}
 // $id là tham số chứa mảng mã danh mục
function delete_danhmuc_multi_item($id) {
    $madm = '';
    foreach ($id as $item) {
        $madm .= $item . ", ";
    }
    //Xóa dấu thừa (,) ở bên phải
    $madm = rtrim($madm, ", ");
    $sql = "DELETE FROM danhmuc WHERE id IN ($madm)";
    pdo_execute($sql);
}
?>