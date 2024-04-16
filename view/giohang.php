
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
    <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Chi tiết giỏ hàng</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Dung lượng</th>
                            <th>Tiền</th>
                            <th>Chức năng</th>
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
                            $xoa='<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-sm btn-primary" type="button">Xoa</button></a>';
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
                            <td>'.$xoa.'</td>
                        </tr>';
                            $i+=1;   
                        }
                        ?>  
                    </tbody>
                </table> <br><br>
                <?php
            echo '<div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Thành tiền</h4>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tong</h5>
                            <h5 class="font-weight-bold">$'.$tong.'</h5>
                        </div>
                        <a href="index.php?act=bill"><button class="btn btn-block btn-primary my-3 py-3">Tiếp tục đặt hàng</button></a>
                    </div>
                </div>
            </div>';
            ?>
            </div>
            
            
        </div>
    </div>
    
    <!-- Cart End -->
