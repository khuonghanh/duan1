<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sách bài viết</h1>
        </div>
        <form  action="#" method="post">
            <input  type="text" name="kyw" id="">
           
           
            <input class="btn btn-primary" type="submit" name="listok" value="GO">
        </form>
        <br>
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>STT </th>
                        <th>Tiêu đề</th>
                        <th>Giới thiệu</th>
                        
                        <th>Hình ảnh</th>
                        <th>Nội  dung</th>
                      
                    </tr>
                    <?php 
                        foreach($list_baiviet as $baiviet){
                            extract($baiviet);
                            $suasp="index.php?act=suabv&id=".$id;
                            $xoasp="index.php?act=xoabv&id=".$id;

                            $hinhpath="../upload/".$hinhanh;
                            if(is_file($hinhpath)){
                               $hinhanh ="<img src='".$hinhpath."' width='100'>" ;
                            }else{
                                $hinhanh = "no photo";
                            }
                           
                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tieu_de.'</td>
                            <td>'.$gioi_thieu.'</td>
                            <td>'.$hinhanh.'</td>
                            <td>'.$noi_dung.'</td>
                            
                            <td> <a href="'.$suasp.'"><button class="btn btn-primary" type="button">Sửa</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoasp.'"><button class="btn btn-primary" type="button">Xóa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=addbv"><button class="btn btn-primary" type="button">Nhập thêm</button></a>
                </div>
            </form>
        </div>