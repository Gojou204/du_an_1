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
                                    <!-- <li><a href="#"><i class="far fa-angle-double-right"></i>Small Suite<span>(06)</span></a></li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Single<span>(05)</span></a></li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Family<span>(09)</span></a></li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Double Room<span>(03)</span></a></li> -->
                                </ul>
                            </div>
                        </div>               
                    </div>
                </div>
                
                <div class="col-xl-9 order-first order-xl-1 xl-mb-30">
                    <?php foreach ($list_hotel as $hotel) : ?>
                        <?php
                            extract($hotel);
							$listphong = "index.php?act=listphong&id_hotel=".$id_hotel;
                            $hinh = $img_path.$img;

                            echo '<div class="room__list-item">
                                    <div class="room__list-item-left">
										<a href="'.$listphong.'"><div class="room__list-item-image">
                                            <img src="'.$hinh.'" alt="" width=250px>
                                        </div></a>
                                    </div>
                                    <div class="room__list-item-right">
                                        <div class="room__list-item-right-content">
											<a href="'.$listphong.'"><h4><b>'.$name.'</b></h4></a>
                                            
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
                                            <a class="simple-btn" href="'.$listphong.'"><i class="far fa-chevron-right"></i>Read More</a>											
                                        </div>
                                    </div>
                                </div>';
                        ?>
                    <?php endforeach ?>
                    

                    <!-- <div class="room__list-item">
						<div class="room__list-item-left">
							<div class="room__list-item-image">
								<img src="assets/img/hotel/hotel-20.jpg" alt="">
							</div>
						</div>
						<div class="room__list-item-right">
							<div class="room__list-item-right-content">
								<h4>Junior Suite</h4>
								<p>Savvy travelers are looking for more than just the next destination on the map. They are looking for a memorable experience.</p>
								<ul>
									<li><i class="fal fa-bed-alt"></i>(4) bed's</li>
									<li><i class="fal fa-users"></i>(2) Guest's</li>
								</ul>
							</div>
							<div class="room__list-item-right-meta">
								<div class="room__list-item-right-meta-top">																	
									<span>$205/Night</span>
									<p><i class="fas fa-star"></i><span>3.9</span>2k</p>
								</div>
								<a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
							</div>
						</div>
                    </div>

                    <div class="room__list-item">
						<div class="room__list-item-left">
							<div class="room__list-item-image">
								<img src="assets/img/hotel/hotel-21.jpg" alt="">
							</div>
						</div>
						<div class="room__list-item-right">
							<div class="room__list-item-right-content">
								<h4>Double Room</h4>
								<p>Savvy travelers are looking for more than just the next destination on the map. They are looking for a memorable experience.</p>
								<ul>
									<li><i class="fal fa-bed-alt"></i>(3) bed's</li>
									<li><i class="fal fa-users"></i>(4) Guest's</li>
								</ul>
							</div>
							<div class="room__list-item-right-meta">
								<div class="room__list-item-right-meta-top">																	
									<span>$219/Night</span>
									<p><i class="fas fa-star"></i><span>4.9</span>2k</p>
								</div>
								<a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
							</div>
						</div>
                    </div>

                    <div class="room__list-item">
						<div class="room__list-item-left">
							<div class="room__list-item-image">
								<img src="assets/img/hotel/hotel-22.jpg" alt="">
							</div>
						</div>
						<div class="room__list-item-right">
							<div class="room__list-item-right-content">
								<h4>Small Suite</h4>
								<p>Savvy travelers are looking for more than just the next destination on the map. They are looking for a memorable experience.</p>
								<ul>
									<li><i class="fal fa-bed-alt"></i>(2) bed's</li>
									<li><i class="fal fa-users"></i>(3) Guest's</li>
								</ul>
							</div>
							<div class="room__list-item-right-meta">
								<div class="room__list-item-right-meta-top">																	
									<span>$188/Night</span>
									<p><i class="fas fa-star"></i><span>4.4</span>2k</p>
								</div>
								<a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
							</div>
						</div>
                    </div>

                    <div class="room__list-item">
						<div class="room__list-item-left">
							<div class="room__list-item-image">
								<img src="assets/img/hotel/hotel-23.jpg" alt="">
							</div>
						</div>
						<div class="room__list-item-right">
							<div class="room__list-item-right-content">
								<h4>Luxury Room</h4>
								<p>Savvy travelers are looking for more than just the next destination on the map. They are looking for a memorable experience.</p>
								<ul>
									<li><i class="fal fa-bed-alt"></i>(3) bed's</li>
									<li><i class="fal fa-users"></i>(6) Guest's</li>
								</ul>
							</div>
							<div class="room__list-item-right-meta">
								<div class="room__list-item-right-meta-top">																	
									<span>$229/Night</span>
									<p><i class="fas fa-star"></i><span>3.7</span>2k</p>
								</div>
								<a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
							</div>
						</div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
	<!-- Room List End -->