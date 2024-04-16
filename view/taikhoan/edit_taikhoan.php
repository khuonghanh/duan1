<!-- Contact Start -->
<div class="container-fluid pt-5 ">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Cập nhật tài khoản</span></h2>
    </div>

    <div class=" form_dk ">
        <div class="contact-form">
            <?php
            if (isset ($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <div class="control-group">
                    Tên tài khoản: <br>
                    <input type="text" class="form-control" name="user" value="<?= $user ?>"> <br>
                </div>
                <div class="control-group">
                    Email: <br>
                    <input type="email" class="form-control" name="email" value="<?= $email ?>"> <br>
                </div>
                <div class="control-group">
                    Số điện thoại: <br>
                    <input type="text" class="form-control" name="sdt" value="<?= $sdt ?>"> <br>
                </div>
                <div class="control-group">
                    Địa chỉ: <br>
                    <input type="text" class="form-control" name="diachi" value="<?= $diachi ?>"> <br>
                </div>
                <div class="control-group">
                    Mật khẩu: <br>
                    <input type="text" class="form-control" name="pass" value="<?= $pass ?>"> <br>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input class="btn btn-primary py-2 px-4" type="submit" name="capnhat" value="Cập nhật">
                    <input class="btn btn-primary py-2 px-4" type="reset" value="Nhập lại">
                </div>
            </form>

            <?php
            if (isset ($thongbao) && ($thongbao != "")) {
                echo '<div class="thongbao">' . $thongbao . '</div>';
            }
            ?>
        </div>
    </div>


</div>
<!-- Contact End -->