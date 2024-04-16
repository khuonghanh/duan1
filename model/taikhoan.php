<?php
function insert_taikhoan($user, $pass, $email, $sdt, $diachi)
{
    $sql = "INSERT INTO taikhoan(user,pass,email,sdt,diachi) 
        VALUES('$user','$pass','$email','$sdt','$diachi')";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "SELECT*FROM taikhoan 
         WHERE email = '" . $email . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikoan($id, $user, $pass, $email, $diachi, $sdt)
{

    $sql = "UPDATE taikhoan SET user='" . $user . "',pass='" . $pass . "',email='" . $email . "',diachi='" . $diachi . "' ,sdt='" . $sdt . "' WHERE id=" . $id;
    pdo_execute($sql);
}

?>