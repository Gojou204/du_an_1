	<!-- Page Banner Start -->
    <div class="page__banner" data-background="assets/img/banner/page-banner-5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>DANH SÁCH KHÁCH SẠN</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>-</span>Hotels</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner End -->

	<!-- Room List Start -->
    <div class="room__list section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                            <h5>Lọc khách sạn theo thành phố</h5>
                            <div class="all__sidebar-item-category">
                                <ul>
                                    <?php foreach ($list_city as $city) : ?>                                    
                                        <?php
                                            extract($city);
                                            $link_city = "index.php?act=list_hotel_by_city&id_city=$id_city";
                                            
                                            echo '<li><a href="'.$link_city.'"><i class="far fa-angle-double-right"></i>'.$name.'</a></li>';
                                        ?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>               
                    </div>
                </div>
                
                <div class="col-xl-9 order-first order-xl-1 xl-mb-30">
                    <?php foreach ($list_hotel_by_city as $hotel_by_city) : ?>
                        <?php
                            extract($hotel_by_city);
                            $hinh = $img_path.$img;

                            echo '<div class="room__list-item">
                                    <div class="room__list-item-left">
                                        <div class="room__list-item-image">
                                            <img src="'.$hinh.'" alt="" width=250px>
                                        </div>
                                    </div>
                                    <div class="room__list-item-right">
                                        <div class="room__list-item-right-content">
                                            <h4><b>'.$name.'</b></h4>
                                            <p>'.$about.'</p>
                                            <ul>
                                                <li><i class="fal fa-location"></i>'.$address.'</li>   
												<li><p>Lượt xem: '.$views.'</p></li>                                 
                                            </ul>
                                        </div>
                                        <div class="room__list-item-right-meta">
                                            <div class="room__list-item-right-meta-top">																	
                                                <!-- <span>$249/Đêm</span> -->
                                                <p><i class="fas fa-star"></i><span>2.9</span>2k</p>
                                            </div>
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>											
                                        </div>
                                    </div>
                                </div>';
                        ?>
                    <?php endforeach ?>    
                </div>
            </div>
        </div>
    </div>
	<!-- Room List End -->