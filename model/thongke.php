<?php
function loadall_thongke(){
    $sql="SELECT danhmuc.id AS madm, danhmuc.tendm AS tendm, COUNT(sanpham.id) AS countsp, MIN(sanpham.gia) AS minprice, MAX(sanpham.gia) AS maxprice, AVG(sanpham.gia) AS avgprice";
    $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm ";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $list_thongke=pdo_query($sql);
    return  $list_thongke;

}

?>