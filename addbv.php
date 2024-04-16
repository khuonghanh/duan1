<div class="container-fluid pt-4 px-4 ">
            <h1>Thêm mới bài viết</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="index.php?act=addbv" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                   
                    Tiêu đề <br>
                    <input class="form-control" type="text" name="tieude" id=""><br>
                    Giới thiệu <br>
                    <input class="form-control" type="text" name="gioithieu" id=""><br>
                    Hình ảnh <br>
                    <input class="form-control" type="file" name="hinhanh" id=""><br>
                    Nội dung <br>
                    <textarea name="noidung" id="" cols="30" rows="10"></textarea>
                  
                    <br><br>
                
                </div>
                
                <div class="pt-4">
                    <button class="btn btn-primary" type="submit" name="thembv" value="thembv" >Thêm mới</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                    <a href="index.php?act=baiviet"><button class="btn btn-primary" type="button">Danh sách</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
    