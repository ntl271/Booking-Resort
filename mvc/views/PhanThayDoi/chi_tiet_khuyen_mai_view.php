<!-- breadcrumbs -->
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Combo hè mát lạnh 300,000 VNĐ" />
            </div>
            <?php $ct  = json_decode($data["chitietkhuyenmai"],true);
                                foreach($ct as $row) {?>
            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb"><?php echo $row["tieu_de"]; ?></h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./khuyenmai" class="linkListBreadcrumb" title="Khuyến mãi">Khuyến mãi</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page"><?php echo $row["tieu_de"]; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- service detail -->
        <div class="wrapPageRoomDetail">
            <div class="container-xl containerPageRoomDetail">
                <div class="contentPageRoomDetail">

                <!-- chi tiết một khuyến mãi --> 
                    <div class="row rowInfoRoomDetail">
                        <div class="col-lg-6 colSlideRoomDetail">
                            <div class="contentSlideRoomDetail">
                            <?php $hinh_anh  = json_decode($data["hinhanh"],true);
                                foreach($hinh_anh as $row2) {
                                    echo '<img src="public/assets/images/'.$row2["image_anh"].'"
                                     class="avatarPromotionDetail" />';
                                }
                            ?>
                                
                            </div>
                        </div>

                        <div class="col-lg-6 colTextRoomDetail">
                            <div class="contentTextRoomDetail">
                                <div class="wrapTitleType1 titleMainRoomDetail"><?php echo $row["tieu_de"]; ?></div>

                                <div class="wrapDescriptionRoomDetail showTextItemUtilities">
                                    <ul>
                                    <?php $thuoc_tinh  = json_decode($data["thuoctinh"],true);
                                        foreach($thuoc_tinh as $row1) {?>

                                        <li>
                                            <div style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 28px; color: #333;">
                                            <?php echo $row1["noi_dung"]; ?></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <!--end  chi tiết một khuyến mãi --> 
                    <div class="wrapRoomWouldLike">
                        <div class="wrapTitleType2 titleMainRoomWouldLike">Một số hình ảnh</div>

                        <div class="wrapSlideRoomWouldLike">
                            <div class="showSlideRoomWouldLike">
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva1.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva2.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva3.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>

                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva4.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva5.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>

                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="mot-so-hinh-anh.htm" title="một số hình ảnh đẹp" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/tva6.jpg" alt="một số hình ảnh đẹp" class="imgItemLatestNews" />
                                    </a>
        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service detail -->
        <script src="public/assets/js/promotion-detail.js"></script>