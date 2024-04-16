
<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql="SELECT taikhoan.user AS ten, noidung, ngaybinhluan, idpro 
    FROM binhluan 
    JOIN taikhoan ON binhluan.iduser = taikhoan.id  
    WHERE idpro='".$idpro."' 
    ORDER BY binhluan.id DESC LIMIT 0, 25;";
    $listbl=pdo_query($sql);
    return $listbl;
 }
//ADMIN
function loadall_bladmin(){
    $sql="SELECT * FROM binhluan ORDER BY id DESC";
    $listbl=pdo_query($sql);
    return $listbl;
 }

function delete_binhluan($id){
    $sql="DELETE FROM binhluan WHERE id=".$id;
    pdo_execute($sql);
}
?>