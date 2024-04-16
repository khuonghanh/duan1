<?php
function tongdonhang(){
    $tong=0;
    
    foreach($_SESSION['mycart'] as $cart){
        
        $ttien= intval($cart[2]) * $cart[4];
        $tong+=$ttien;                     
    }
    return $tong;
}

function insert_bill($user,$email,$diachi,$sdt,$pttt,$tongdonhang,$ngaydathang){
    $sql="INSERT INTO bill(user,email,diachi,sdt,pttt,tongdonhang,ngaydathang) VALUES('$user','$email','$diachi','$sdt','$pttt','$tongdonhang','$ngaydathang')";
    return pdo_execute_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$hinh,$tensp,$gia,$soluong,$dungluong,$thanhtien,$idbill){
    $sql="INSERT INTO cart(iduser,idpro,hinh,tensp,gia,soluong,dungluong,thanhtien,idbill) VALUES('$iduser','$idpro','$hinh','$tensp','$gia','$soluong','$dungluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($idbill){
    $sql="SELECT * FROM bill WHERE id=".$idbill;
    $bill=pdo_query_one($sql);
    return $bill;
 }
 function getPDOConnection() {
    $dsn = 'mysql:host=localhost;dbname=peak_sport;charset=utf8';
    $username = 'your_username';
    $password = 'your_password';

    try {
        $pdo = new PDO($dsn, $username, $password);
        return $pdo;
    } catch (PDOException $e) {
        die('Kết nối không thành công: ' . $e->getMessage());
    }
}


 function loadall_lichsu($ten){
    $sql = "SELECT * FROM `bill` WHERE `user` = :ten ORDER BY id DESC" ;
    $pdo = getPDOConnection(); 
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ten', $ten, PDO::PARAM_STR);
    $stmt->execute();
    $listdh = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $listdh;
}


 // admin
 function loadall_bill(){
    $sql="SELECT * FROM bill ORDER BY id DESC";
    $listdh=pdo_query($sql);
    return $listdh;
 }

 function loadone_billadmin($id){
    $sql="SELECT * FROM bill WHERE id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
 }
 function loadall_cartadmin($idbill){
    $sql="SELECT * FROM cart WHERE idbill=".$idbill;
    $cart=pdo_query($sql);
    return $cart;
 }

 function update_bill($trangthai,$id){
    $sql="UPDATE bill SET trangthai='".$trangthai."' WHERE id=".$id;
    pdo_execute($sql);
}

function delete_cart($id){
    $sql="DELETE FROM carl WHERE idbill=".$id;
    pdo_execute($sql);
}
function delete_bill($id){
    $sql="DELETE FROM bill WHERE id=".$id;
    pdo_execute($sql);
}

?>