<?php
function insert_binhluan($noidung,$manguoidung,$masanpham,$thoigian)
{
    $sql = "insert into binhluan(noidung,manguoidung,masanpham,thoigian) values(?,?,?,?)";
    pdo_execute($sql,$noidung,$manguoidung,$masanpham,$thoigian);
}
function load_all_binhluan($masanpham){
    $sql = "SELECT binhluan.noidung,sanpham.tensanpham,sanpham.hinh,sanpham.id, count(binhluan.noidung) as countbl from binhluan inner join  sanpham on binhluan.masanpham = sanpham.id where 1";
    if ($masanpham>0) {
        $sql.=" and masanpham = '".$masanpham."'";
    }
    $sql.= " group by masanpham order by masanpham desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function load_all_binhluan_ct($masanpham){
    $sql = "SELECT binhluan.*,nguoidung.hoten,sanpham.tensanpham from binhluan inner join nguoidung on binhluan.manguoidung = nguoidung.id inner join sanpham on binhluan.masanpham = sanpham.id where 1";
    if ($masanpham>0) {
        $sql.=" and masanpham = '".$masanpham."'";
    }
    $sql.= " order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

function deletet_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}
function delete_binhluan_multi_item($id) {
    $idbl = '';
    foreach ($id as $item) {
        $idbl .= $item . ", ";
    }
    //Xóa dấu thừa (,) ở bên phải
    $idbl = rtrim($idbl, ", ");
    $sql = "DELETE FROM binhluan WHERE id IN ($idbl)";
    pdo_execute($sql);
}
?>