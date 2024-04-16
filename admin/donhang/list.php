<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sách đơn hàng</h1>
        </div>
        
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Sdt</th>
                        <th>Phương thức thanh toán</th>
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>trạng thái</th>
                    </tr>
                    <?php 
                        foreach($dsbill as $dh){
                            extract($dh);
                            $suasp="index.php?act=suadh&id=".$id;
                            $xoasp="index.php?act=xoadh&id=".$id;

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

                            /////
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
                           

                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$email.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$txtmess.'</td>
                            <td>'.$ngaydathang.'</td>
                            <td>'.$tongdonhang.'</td>
                            <td>'.$tt.'</td>
                            <td> <a href="'.$suasp.'"><button class="btn btn-primary" type="button">Chi tiết</button></a>
    
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
            </form>
        </div>