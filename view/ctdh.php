<!-- Contact Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2"> Chi tiết đơn hàng</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-5">
                <table class="table table-bordered text-center mb-0">
                        <div class="card-header bg-secondary border-0">
                        <h5 class="font-weight-semi-bold m-0">Thông tin khách hàng</h5>
                        </div>
                        <br>
               <?php
                    extract($donhang);
               ?>

                            <li><strong> Tên khách hàng:</strong>  <?=$user ?></li>
                            <li><strong>Email:</strong>  <?=$email?></li>
                            <li><strong>Địa chỉ:</strong>  <?=$diachi?></li>
                            <li><strong>Số điện thoại:</strong>  <?=$sdt?></li>
                            <li><strong>Ma đơn hàng:</strong>   DAM-<?=$id?></li>
                            <li><strong>Ngày đặt hàng:</strong>  <?=$ngaydathang?></li>
                            <li><strong>Tổng tiền:</strong>  <?=$tongdonhang?></li>
                            <li><strong>Phương thức thanh toán:</strong>  
                            <?php
                                switch ($pttt) {
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
                                switch ($trangthai) {
                                    case '0':
                                        $tt="Đang xử lý";
                                        break;

                                        case '1':
                                            $tt="Đang giao hàng";
                                            break;
                                            case '2':
                                                $tt="Đã nhận hàng";
                                                break;
                                            case '3':
                                                $tt="Hủy";
                                                break;
                                    
                                    default:
                                        $tt="";
                                        break;
                                }
                                ?>
                                <?= $tt?>
                
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
                        foreach($billcart as $cart){
                            extract($cart);
                            $hinhpath=$image.$hinh;
                            if(is_file($hinhpath)){
                              $img ="<img src='".$hinhpath."' width='80'>" ;
                           }else{
                             $img = "no photo";
                           }
                            $tong+=$thanhtien;
                        ?>
                        <tr>
                            <td class="align-middle"><img src="<?=$hinhpath ?> " alt="" style="width: 50px;"><?=$tensp ?></td>
                            <td class="align-middle"><?= $gia?></td>
                            <td class="align-middle"><?= $soluong?></td>
                            <td class="align-middle"><?= $dungluong?></td>
                            <td class="align-middle"><?= $thanhtien?></td>
                            
                        </tr>

                        <?php
                            $i+=1;   
                        }
                        ?>  
                    </tbody>
                    </table>
                    
            
                    <div class="card-footer alert-secondary">
                        <div class="d-flex justify-content-between mt-2 ">
                            <h5 class="font-weight-bold">Số tiền cần phải trả:</h5>
                            <h5 class="font-weight-bold"><?=$tong?></h5>
                        </div>
                    </div>

                   
               </div> 
            </form>

            
        
        
    </div>
    <!-- Contact End -->