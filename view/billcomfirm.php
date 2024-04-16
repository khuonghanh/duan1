<!-- Contact Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2"> ĐẶT HÀNG THÀNH CÔNG</span></h2>
            <h5 style="color:red">Cảm ơn quý khách đã mua hàng</h5>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-5">
                <table class="table table-bordered text-center mb-0">
                        <div class="card-header bg-secondary border-0">
                        <h5 class="font-weight-semi-bold m-0">Thông tin khách hàng</h5>
                        </div>
                        <br>
               <?php
                    if (isset($bill)&&(is_array($bill))) {
                       extract($bill);
                    }
               ?>

                    <li><strong> Tên khách hàng:</strong>  <?=$bill['user'];?></li>
                    <li><strong>Email:</strong>  <?=$bill['email'];?></li>
                    <li><strong>Địa chỉ:</strong>  <?=$bill['diachi'];?></li>
                    <li><strong>Số điện thoại:</strong>  <?=$bill['sdt'];?></li>
                    <li><strong>Ma đơn hàng:</strong>   DAM-<?=$bill['id'];?></li>
                    <li><strong>Ngày đặt hàng:</strong>  <?=$bill['ngaydathang'];?></li>
                    <li><strong>Tổng tiền:</strong>  <?=$bill['tongdonhang'];?></li>
                    <li><strong>Phương thức thanh toán:</strong>  
                        <?php
                        switch ($bill['pttt']) {
                            case '0':
                                $txtmess="Thanh toán khi nhận hàng";
                                break;

                                case '1':
                                    $txtmess="Thanh toán online";
                                    break;
                                    case '2':
                                        $txtmess="Thanh toán qua QRcode";
                                        break;
                            
                            default:
                                $txtmess="quý khách chưa chọn phương thức thanh toán";
                                break;
                        }
                        ?>
                        <?= $txtmess?>
                
                </li>

                <li><strong>Trang thái:</strong>  
                        <?php
                        switch ($bill['trangthai']) {
                            case '0':
                                $trangthai="Đang sử lý";
                                break;

                                case '1':
                                    $trangthai="Đang giao hàng";
                                    break;
                                    case '2':
                                        $trangthai="Đã nhận hàng";
                                        break;
                            
                            default:
                                $trangthai="";
                                break;
                        }
                        ?>
                        <?= $trangthai?>
                
                </li>

                    
                    </table>
            </div>
                <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
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
                            <h5 class="font-weight-bold">Số tiền cần phải trả:</h5>
                            <h5 class="font-weight-bold">$'.$tong.'</h5>
                        </div>
                    </div>
                </div>
            </div>';
            ?>

                    </div>
                        
                        <a href="index.php" class="btn btn-block btn-primary my-3 py-3" >Quay lại trang chủ</a>
                    </div>
                
               </div> 
            </form>

            
        
        
    </div>
    <!-- Contact End -->