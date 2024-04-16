<!-- Contact Start -->
<div class="container-fluid pt-5 ">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Quên mật khẩu</span></h2>
    </div>
<center>
    <div class=" form_qmk ">
        <div class="contact-form">
            <form action="index.php?act=quenmk" method="post">
                <div class="control-group">
                    Email: <br>
                    <input type="email" class="form-control" name="email" required> <br>
                </div>
                <div>
                    <input class="btn btn-primary py-2 px-4" type="submit" name="guiemail" value="Gửi">
                    <input class="btn btn-primary py-2 px-4" type="reset" name="" value="Nhập lại">
                    <a href="index.php?act=dangnhap" class="btn btn-primary py-2 px-4">Đăng nhập</a>
                </div>
            </form>

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo '<div class="thongbao">' . $thongbao . '</div>';
            }
            ?>
        </div>
    </div>
        </center>

</div>
<!-- Contact End -->