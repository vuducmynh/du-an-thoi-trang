<?php
function insert_binhluan($noidung, $manguoidung, $masanpham, $thoigian)
{
    $sql = "insert into binhluan(noidung,manguoidung,masanpham,thoigian) values(?,?,?,?)";
    pdo_execute($sql, $noidung, $manguoidung, $masanpham, $thoigian);
}
function load_all_binhluan_sanpham(){
    $sql = "SELECT sanpham.id as id, sanpham.tensanpham as tensanpham, MIN(binhluan.thoigian) as cunhat, MAX(binhluan.thoigian) as moinhat, COUNT(binhluan.noidung) as tongsobl from binhluan inner join sanpham on binhluan.masanpham = sanpham.id group by masanpham order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function load_all_binhluan_chitiet($masanpham)
{
    $sql = "SELECT binhluan.*,nguoidung.hoten as hoten,sanpham.tensanpham as tensanpham from binhluan inner join nguoidung on binhluan.manguoidung = nguoidung.id inner join sanpham on binhluan.masanpham = sanpham.id where masanpham='$masanpham' order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

function deletet_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}
 // $id là tham số chứa mảng mã danh mục
 function delete_binhluan_multi_item($id) {
    $mabl = '';
    foreach ($id as $item) {
        $mabl .= $item . ", ";
    }
    //Xóa dấu thừa (,) ở bên phải
    $mabl = rtrim($mabl, ", ");
    $sql = "DELETE FROM binhluan WHERE id IN ($mabl)";
    pdo_execute($sql);
}