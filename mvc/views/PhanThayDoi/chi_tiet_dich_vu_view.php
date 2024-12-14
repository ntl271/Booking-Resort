
        <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs"  />
            </div>
            <?php $dichvu = $data["chitietdichvu"];?>
            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Hồ Bơi</h1>
                    <?php foreach($dichvu as $row) {?>
                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="ds-dich-vu.htm" class="linkListBreadcrumb" title="Dịch vụ">Dịch vụ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page"><?php echo $row["tieu_de"]?></li>
                        </ol>
                    </nav>

                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- service detail -->
        <div class="wrapPageRoomDetail">
            <div class="container-xl containerPageRoomDetail">
                <div class="contentPageRoomDetail">
                    <div class="row rowInfoRoomDetail">
                        <div class="col-lg-6 colSlideRoomDetail">
                            <div class="contentSlideRoomDetail">
                                <div class="wrapSlideMainRoomDetail">
                                    <div class="showSlideMainRoomDetail">


                                    <!-- slider hinh anh --> 
                                    <?php $hinhanh1 = $data["hinhanh1"];?>
                                    <?php foreach($hinhanh1 as $row3){?>                              
                                        <div class="itemSlideMainRooMDetail">
                                            <div class="wrapImgResize img16And9">
                                                <img src="public/assets/images/<?php echo $row3["image_anh"];?>"
                                                 alt="<?php echo $row3["tieu_de"];?>" />
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                                 <!--end slider hinh anh --> 
                                <div class="wrapSlideCtrRoomDetail">
                                    <div class="showSlideCtrRoomDetail">
                                    <?php $hinhanh1 = $data["hinhanh1"];?>
                                    <?php foreach($hinhanh1 as $row3){?>                              
                                        <div class="itemSlideCtrRooMDetail">
                                        <div class="wrapImgResize img16And9 wrapImgResizeSlideCtrRooMDetail">
                                                <img src="public/assets/images/<?php echo $row3["image_anh"];?>"
                                                 alt="<?php echo $row3["tieu_de"];?>" />
                                            </div>
                                        </div>
                                        <?php } ?>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- phan noi dung chi tiet dich vu -->
                       

                        <?php foreach($dichvu as $row) {?>

                        <div class="col-lg-6 colTextRoomDetail">
                            <div class="contentTextRoomDetail">
                                <div class="wrapTitleType1 titleMainRoomDetail"><?php echo $row["tieu_de"]?></div>

                                <div class="wrapDescriptionRoomDetail showTextItemUtilities">
                                    <ul>
                                    <?php $thuoctinh = $data["thuoctinh"];?>
                                        <?php foreach($thuoctinh as $row1) {?>
                                        <li>
                                            <div style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 28px; color: #333;">
                                            <?php echo $row1["ten_thuoc_tinh"]?></div>
                                            <span style="color: #333;"><?php echo $row1["noi_dung"]?></span>
                                        </li>
                                        <?php }?>
                               
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php }?>
                        <!-- end phan noi dung chi tiet dich vu -->
                    </div>
                    
                    <div class="wrapRoomWouldLike">
                        <div class="wrapTitleType2 titleMainRoomWouldLike">Một số hình ảnh   </div>

                        <div class="wrapSlideRoomWouldLike">
                            <div class="showSlideRoomWouldLike">

                            <!-- nhan 1 -->
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm"  class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva1.jpg"  class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                            <!--end nhan 1 -->
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva3.jpg" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva4.jpg" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>

                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva5.jpg" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm"  class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva6.jpg"  class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva2.jpg"  class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service detail -->
        <script src="public/assets/js/service-detail.js"></script>