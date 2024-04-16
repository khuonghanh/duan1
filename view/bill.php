<!-- Contact Start -->
<center>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Thông tin đơn hàng</span></h2>
        </div>
    <form action="index.php?act=billcomfirm" method="post">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-5">
            <table class="table table-bordered text-center mb-0">
                        <div class="card-header bg-secondary border-0">
                        <h5 class="font-weight-semi-bold m-0">Thông tin khách hàng</h5>
                        </div>
                        <br>

                    <?php
                    if(isset($_SESSION['user'])){
                        $user=$_SESSION['user']['user'];
                        $email=$_SESSION['user']['email'];
                        $sdt=$_SESSION['user']['sdt'];
                        $diachi=$_SESSION['user']['diachi'];

                    }else{
                        header("location: http://localhost/DUAN/index.php?act=dangnhap");
                    }

                    ?>


                    <div class="control-group">
                        Tên tài khoản: <br>
                        <input type="text" class="form-control" name="user" value="<?= $user ?>" > <br>
                    </div>
                    <div class="control-group">
                        Email: <br>
                        <input type="email" class="form-control" name="email" value="<?= $email ?>"> <br>
                    </div>
                    <div class="control-group">
                        SDT: <br>
                        <input type="text" class="form-control" name="sdt" value="<?= $sdt ?>"> <br>
                    </div>
                    <div class="control-group">
                        Dia chi: <br>
                        <input type="text" class="form-control" name="diachi" value="<?= $diachi ?>"> <br>
                    </div>
                    <div class="control-group">
                        Phương thức thanh toán: <br>
                        <tr>
                            <td><input type="radio" name="pttt" value="0" checked >Thanh toán khi nhận hàng </td>
                            <td><input type="radio" name="pttt" value="1" >Thanh toán online </td>
                            <td><input type="radio" name="pttt" value="2" >Thanh toán qua QR code</td>
                        </tr>
                        
                        
                        
                    </div>

                    <div class="col-lg-7 mb-5"> 
                <div class="contact-form">
                    <div id="success"></div>
                    <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark"><br><br>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Dung lượng</th>
                            <th>Tiền</th>
                            
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        $tong=0;
                        $i=0;
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh=$image.$cart[3];
                            $ttien= intval($cart[2]) * $cart[4];
                            $tong+=$ttien;
                            echo '<tr>
                            <td class="align-middle"><img src="'.$hinh.'" alt="" style="width: 50px;">'.$cart[1].'</td>
                            <td class="align-middle">'.$cart[2].'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="'.$cart[4].'">
                                </div>
                            </td>
                            <td class="align-middle">'.$cart[5].'</td>
                            <td class="align-middle">$'.$ttien.'</td>
                            
                        </tr>';
                            $i+=1;   
                        }
                        ?>  
                    </tbody>
                </table>
                <?php
            echo '<div class="">
                <div >
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng </h5>
                            <h5 class="font-weight-bold">$'.$tong.'</h5>
                        </div>
                        <input type="submit" class="btn btn-block btn-primary my-3 py-3" name="dathang" value="Đồng ý đặt hàng">
                    </div>
                </div>
            </div>';
            ?>
                </div>
                
        </div>
                </table>
                
        </div>
        

    </form>
</div>
                    </center>
    <!-- Contact End -->