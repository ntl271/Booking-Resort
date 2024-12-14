<div class="wrapHeader">
            <div class="wrapHeaderTop"></div>

            <div class="wrapHeaderBottom">
                <div class="container-xl containerHeaderBottom">
                    <div class="clearfix contentHeaderBottom">
                        <a href="#" title="Menu" class="btnShowMenuHeaderMobile">
                            <div class="iconShow"><i class="fas fa-bars"></i></div>
                            <div class="iconHidden"><i class="fas fa-times"></i></div>
                        </a>

                        <h1 class="wrapLogoHeaderBottom">
                            <a class="linkLogoHeaderBottom" href="./home_index" >
                            <img src="public/assets/images/logo.jpg" class="imgLogoHeaderBottom" 
                            /></a>
                        </h1>

                        <div class="wrapBtnBookRoomHeader">
                            <button type="button" name="book-now" class="btnType1 btnBookNowRoomHeader"  data-toggle="modal" data-target="#modalFormBookRoom"
                            >Đặt phòng ngay</button>
                        </div>

                        <div class="wrapCloseMenuHeaderMobile"></div>
                        <div class="wrapMenuMainHeaderBottom">
                            <ul class="listMenuMainHeaderBottom">
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./home_index" 
                                    title="Trang chủ">Trang chủ</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom menuSubHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./room" title="Phòng">Phòng</a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <?php $listroom =json_decode( $data["listroom"],true) ?>
                                            <?php foreach($listroom as $row) { ?>
                                            <li class="listItemMenuSubHeaderBottom">
                                            <a class="listLinkMenuSubHeaderBottom"
                                             href="./room/chitiet/<?php echo $row["ma_phong"]  ?>" name="<?php echo $row["ma_phong"]  ?>" >
                                             <?php echo $row["ten_phong"] ?></a></li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./dichvu" title="Dịch vụ">Dịch vụ</a>
                                </li>

                        

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./khuyenmai" title="Khuyến mãi">Khuyến mãi</a>
                                </li>
                                
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./hinhanh" title="Khuyến mãi">Hình ảnh</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./lienhe" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>

                            <div class="headerTopLeft">
                                <ul class="clearfix listMenuHeaderTop">
                                    <li class="listItemHeaderTop"><a target="_blank" class="listLinkHeaderTop" href="#" title="6 Nature Retreat" target="_blank"><i class="fas fa-map-marker-alt"></i> 6 Nature Retreat </a></li>
                                    <li class="listItemHeaderTop"><a class="listLinkHeaderTop" title="094 474 10 00"><i class="fas fa-phone"></i> Hotline: 094 474 10 00</a></li>
                                </ul>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>