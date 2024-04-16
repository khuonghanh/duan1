<div class="container-fluid pt-4 px-4 ">
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
</div>
<div class="bg-light rounded p-4 ">
    <form action="" method="post">
        <div class="">
            <table class="table">
                <tr>
                    <th></th>
                    <th>Ma tk</th>
                    <th>Username</th>
                    <!-- <th>Password</th> -->
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>SDT</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtk as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoadtk = "index.php?act=xoatk&id=" . $id;
                    echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $user . '</td>`
                            
                            <td>' . $email . '</td>
                            <td>' . $diachi . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $role . '</td>
                            <td> <a href="' . $suatk . '"><button class="btn btn-primary" type="button">Sửa</button></a>
                             
                             </td>
                            </tr>
                            ';
                }
                ?>

            </table>
        </div>

        <div class="row frmcontent">
            <a href="../index.php"><button class="btn btn-primary" type="button">Trở về giao diện bán hàng</button></a>
        </div>
    </form>
</div>