
<!-- Shop Detail Start -->
<div class="container-fluid py-5">
                    <?php
                        extract($onesp);
                    ?>
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="border">
                        <div class="carousel-item active">
                            <?php
                            $anh=$image.$hinhanh;
                            echo '<img class="w-100 h-100" src="'.$anh.'" alt="Image">';
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <?php
                echo '<h3 class="font-weight-semi-bold">'.$tensp.'</h3>';
                ?>
                
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <?php
                echo '<h3 class="font-weight-semi-bold mb-4">$'.$gia.'</h3>';
                echo '<p class="mb-4">'.$mota.'</p>
                <form action="index.php?act=addtocart" method="post">
                    <div class="d-flex mb-3">
                        <p class="text-dark font-weight-medium mb-0 mr-3">Dung lượng:</p>
                        <input type="number" name="dungluong"min ="68"value="68"id=""> <br>
                        <p class="text-dark font-weight-medium mb-0 mr-3">Số lượng:</p>
                        <input type="number" name="soluong" min="1" max="10" value="1" id="">
                        <input type="hidden" name="tensp" value="'.$tensp.'">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="gia" value="'.$gia.'">
                        <input type="hidden" name="hinh" value="'.$hinhanh.'">
                    </div>
                        <input class="btn btn-primary px-3" type="submit" name="addtocart" value="Thêm giỏ hàng">
                </form>
                
                ';
                ?>
                
               


                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid pt-5">
        <div class="row px-xl-5">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        
                         $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$id?>});
                    
                    });
                </script>

        <div class="card-header bg-secondary border-0 col-lg-12  ">
                        <h4 class="font-weight-semi-bold m-0">Nội dung bình luận</h4>
                    </div>                   
            <div class="col-lg-12 card border-secondary"  >
                <div class="card-body" id="binhluan">
                        

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm cùng loại</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            
        <?php
        
        foreach ($sp_cungloai as $spcl) {
            extract($spcl);
            $anh=$image.$hinhanh;
    

        $idsp="index.php?act=sanphamct&idsp=".$id;
        echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$tensp.'">
                        <input type="hidden" name="img" value="'.$hinhanh.'">
                        <input type="hidden" name="price" value="'.$gia.'">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="'.$idsp.'"><img class="img-fluid w-100" src="'.$anh.'" alt=""></a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" >'.$tensp.'</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$'.$gia.'</h6><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="'.$idsp.'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
                    </div>
                </div>
            </div>';

            
    }

        ?>

        </div>


</div>
    <!-- Shop Detail End -->


    
    
