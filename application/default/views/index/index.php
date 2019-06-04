<div class="container-fluid slider">
    <div class="row">
        <div class="col-md-12" id="slider">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php  
                    $slide=1;
                    while ($row2 = $this->objSlide->fetch(PDO::FETCH_ASSOC)) {
                        extract($row2);                                
                    ?>                    
                        <?php if ($slide==1){ ?>
                        <div class="item active">
                        <?php }else{ ?>
                        <div class="item">
                        <?php } ?>
                        <img alt="Third slide" src="<?php echo URL_BASE;?><?php echo $anh; ?>" style="width: 100%" class="imgSlide">
                    </div>
                    <?php $slide++; } ?>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</div> 
<!-- End Slider -->
<div class="container_fullwidth">
            <div class="container">
                <div class="col-md-3 col-xs-12 left-content">   
                <!-- Lọc -->
                    <div class="p-watch">
                        <a href="#"><p class="left-post">LỌC THEO GIÁ</p></a>
                    </div>
                    <div class="form-group">
                      <select class="form-control" onchange="locTheoGia(this.value);">
                        <option value="0">-- Chọn mức giá --</option>
                        <option value="400">Từ $0 -> $400</option>
                        <option value="700">Từ $400 -> $700</option>
                        <option value="1000">Từ $700 -> $1000</option>
                      </select>
                    </div> 
                <!-- <div class="btn-sosanh" style="text-align: center;">
                    <a href="#" class="btn btn-danger btn-md" style="width: 100%;font-weight: bold;margin-bottom: 20px;">Lọc</a>
                </div>   -->                
                <!-- So sánh -->
                    <div class="hidden-xs">
                        <div class="p-watch">
                            <a href="<?php echo URL_BASE;?>index/soSanh"><p class="left-post" style="margin-top: 30px;">BẢNG SO SÁNH</p></a>
                        </div>
                        <div id="soSanh1" class="alert alert-success">
                            So sánh tối đa 3 sản phẩm!!!
                        </div>
                        <!-- so sánh -->                    
                        <div class="hidden-xs">
                            <div class="p-watch1">
                                <a href="#"><p class="left-post" style="margin-top: 30px;">KHUYẾN MẠI SỐC</p></a>
                            </div>
                            <?php  
                            while ($rowKhuyenMai = $this->objDongHoKhuyenMai->fetch(PDO::FETCH_ASSOC)) {
                                extract($rowKhuyenMai);  
                            ?>
                            <div class="sale-watch">                            
                                <!-- <img src="http://i1187.photobucket.com/albums/z396/ndthanhdh123/Hot.gif" border="0" alt="Photobucket" style="float:right;"> -->
                                <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $dongho_id;?>&th=<?php echo $thuonghieu_id;?>"><img src="<?php echo URL_BASE;?><?php echo $anh; ?>" class="img-sale-watch"/></a>
                                <div style="height: 50px;"><p class="p-sale-watch"><?php echo $ten; ?></div>
                                <p><?php echo $day; ?></p>
                                <p class="gia-sale">$<?php echo $giaMoi; ?> <span class="span-sale-watch">$<?php echo $giaCu; ?></span></p>
                                <a href="" onclick="liveSoSanh('<?php echo $ma;?>');"class="btn btn-default btn-sm" style="margin-top: 5px;">So sánh</a>
                                <a href="#" onclick="livesale('<?php echo $ma;?>');" class="btn btn-danger btn-sm" style="margin-top: 5px;">Mua ngay</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="hidden-xs">
                        <div class="p-watch1">
                            <a href="#"><p class="left-post" style="margin-top: 30px;">ĐỌC TRUYỆN CƯỜI</p></a>
                        </div>
                        <iframe frameborder="1" width="100%" src="http://www.luudiachiweb.com/truyencuoi.htm" height="258"></iframe>
                    </div>
                </div>
            <div class="col-md-9 col-xs-12 right-content" id="locTheoGia"> 
                <div> <!-- ĐH mới nhất -->
                    <div class="p-watch">
                        <a href="#"><p class="left-post">ĐỒNG HỒ MỚI NHẤT</p></a>
                    </div>
                      <!-- Wrapper for slides -->
                    <div class="owl-carousel owl-theme DHMoiNhat">
                        <?php while ($row = $this->objDongHoMoiNhat->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);   ?>
                        <div class="item sale-watch">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $dongho_id;?>&th=<?php echo $thuonghieu_id;?>"><img style="width: 80%;margin-left: 10%" src="<?php echo URL_BASE;?><?php echo $anh; ?>" class="img-sale-watch"/></a>
                                <div style="height: 50px;"><p class="p-sale-watch"><?php echo $ten; ?></div>
                                <p><?php echo $day; ?></p>
                                <p class="gia-sale">$<?php echo $giaMoi; ?> <span class="span-sale-watch">$<?php echo $giaCu; ?></span></p>
                                <a href="#" onclick="liveSoSanh('<?php echo $ma;?>');"class="btn btn-default btn-sm" style="margin-top: 5px;">So sánh</a>
                                <a href="#" onclick="livesale('<?php echo $ma;?>');" class="btn btn-danger btn-sm" style="margin-top: 5px;">Mua ngay</a>
                        </div>
                    <?php } ?>
                    </div>
                    <hr>
                </div>  <!-- End.ĐH mới nhất -->                
                <div> <!-- ĐH giá rẻ -->
                    <div class="p-watch">
                        <a href="#"><p class="left-post">ĐỒNG HỒ GIÁ RẺ</p></a>
                    </div>
                      <!-- Wrapper for slides -->
                    <div class="owl-carousel owl-theme">
                        <?php while ($row = $this->objDongHoGiaRe->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);   ?>
                        <div class="item sale-watch text-center">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $dongho_id;?>&th=<?php echo $thuonghieu_id;?>"><img style="width: 80%;margin-left: 10%" src="<?php echo URL_BASE;?><?php echo $anh; ?>" class="img-sale-watch"/></a>
                            <div style="height: 50px;"><p class="p-sale-watch"><?php echo $ten; ?></div>
                            <p><?php echo $day; ?></p>
                            <p class="gia-sale">$<?php echo $giaMoi; ?> <span class="span-sale-watch">$<?php echo $giaCu; ?></span></p>
                            <a href="#" onclick="liveSoSanh('<?php echo $ma;?>');"class="btn btn-default btn-sm" style="margin-top: 5px;">So sánh</a>
                            <a href="#" onclick="livesale('<?php echo $ma;?>');" class="btn btn-danger btn-sm" style="margin-top: 5px;">Mua ngay</a>
                        </div>
                    <?php } ?>
                    </div>
                    <hr>
                </div>  <!-- End.ĐH giá rẻ -->
                <?php 
                    $database = new Libs_Model();
                    $db = $database->getConnection(); 
                    $objKhachHang = new Default_Models_KhachHang($db);
                    $objKhachHang->email = $_SESSION['email'];
                    $khachHang = $objKhachHang->getKhachHangByInfo();
                    $donhang = new Admin_Models_Donhang($db);
                    $objDonHang = $donhang->getAllDonHang();
                ?>                
                <div> <!-- ĐH được mua nhiều nhất -->
                    <div class="p-watch">
                        <a href="#"><p class="left-post">ĐỒNG HỒ ĐƯỢC MUA NHIỀU NHẤT</p></a>
                    </div>
                      <!-- Wrapper for slides -->                    
                    <div class="owl-carousel owl-theme DHNoiBat">
                        <?php while ($row = $objDonHang->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);   
                            $dongho = new Default_Models_Dongho($db);
                            $dongho->dongho_id = $dongho_id;
                            $RowDH = $dongho->getDongHoById();
                        ?>
                        <div class="item sale-watch text-center">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $RowDH['dongho_id']; ?>&th=<?php echo $RowDH['thuonghieu_id']; ?>"><img style="width: 80%;margin-left: 10%" src="<?php echo URL_BASE;?><?php echo $RowDH['anh']; ?>" class="img-sale-watch"/></a>
                            <div style="height: 50px;"><p class="p-sale-watch"><?php echo $RowDH['ten']; ?></div>
                            <p><?php echo $RowDH['day']; ?></p>
                            <p class="gia-sale">$<?php echo $RowDH['giaMoi']; ?> <span class="span-sale-watch">$<?php echo $RowDH['giaCu']; ?></span></p>
                            <a href="#" onclick="liveSoSanh('<?php echo $RowDH['ma']; ?>');"class="btn btn-default btn-sm" style="margin-top: 5px;">So sánh</a>
                            <a href="#" onclick="livesale('<?php echo $RowDH['ma']; ?>');" class="btn btn-danger btn-sm" style="margin-top: 5px;">Mua ngay</a>
                        </div>
                    <?php } ?>
                    </div>
                    <hr>
                </div>  <!-- End.ĐH được mua nhiều nhất -->

                <!-- <div style="margin-top: -6px;" class="hidden-xs">
                    <img src="<?php echo URL_BASE;?>templates/default/img/hr.jpg" style="width: 100%;">
                </div> -->
            </div>  
            </div>
         </div>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('.DHMoiNhat').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('.DHNoiBat').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
</script>