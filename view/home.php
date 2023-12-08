	<!-- Banner Area Start -->	
	<div class="banner__area" data-background="assets/img/banner-1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="banner__area-title">
						<h1>The Best Hotel<span>Deals in Vietnam</span></h1>
						<div class="banner__area-title-video">
							<div class="video__play">
								<a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<form action="index.php?act=list_hotel" method="POST" enctype="multipart/form-data">
					<div class="check__area">
						<div class="check__area-item">
								<p>Tỉnh, thành phố hoặc địa điểm:</p>
								<input type="text" name="id_city" id="listcity" list="city">
								<datalist id="city">
									<?php foreach ($list_city as $city) { 
										
											extract($city);
											echo '<option value="'.$name.'"></option>';
										
									}?>
									
								</datalist>
								
						</div>
						<div class="check__area-item">						
							<p>Ngày nhận phòng:</p>
							<input type="date" name="" id="date_check"> 
						</div>
						<div class="check__area-item">		
							<p>Ngày trả phòng:</p>
							<input type="date" name="" id="date_check">
							<!-- <input type="number" name="" id="number_room"> -->
							<!-- <select name="select">
								<option value="1">Người lớn</option>
								<option value="2">Trẻ em</option>
								<option value="3">Phòng</option>
							</select> -->					
						</div>
						
							<div class="check__area-item button">
								<button class="theme-btn" type="submit" name="check">Kiểm tra ngay</button>				
							</div>
						
							
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Banner Area End -->
	<!-- Accommodations Area Start -->
	<div class="accommodations__area section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-6 lg-mb-30">
					<div class="accommodations__area-title">
						<span class="subtitle__one">Giới thiệu</span>
						<h2>Chào mừng đến với khách sạn của chúng tôi</h2>
						<p>Những khách du lịch thông thái không chỉ tìm kiếm điểm đến tiếp theo trên bản đồ. Họ đang tìm kiếm một trải nghiệm đáng nhớ và kết bạn mới trên đường đi.</p>
						<a class="theme-btn" href="about.html">Xem thêm<i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<div class="accommodations__area-right">
						<div class="accommodations__area-right-image">
							<img src="assets/img/hotel/hotel-1.jpg" alt="">
							<div class="accommodations__area-right-image-two">
								<img src="assets/img/hotel/hotel-2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Accommodations Area End -->

	<!-- Danh sách thành phố có views cao nhất-->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						<span class="subtitle__one">Danh sách thành phố</span>
						<h2>Top thành phố được tìm kiếm nhiều nhất</h2>
					</div>					
				</div>
			</div>
			
			<div class="row deluxe__area-active">
				<?php
					$list_city_view = getAll_city_view();
					foreach($list_city_view as $city_view) :
				?>
					<?php 
						extract($city_view);
						$hinh = $img_path.$img;

						echo '<div class="col-xl-4 col-lg-8 lg-mb-30">
									<div class="deluxe__area-item"> 
										<div class="deluxe__area-item-image">
											<img class="img__full" src="'.$hinh.'" alt="">
										</div>
										<div class="deluxe__area-item-content"> 
											<h6>Lượt xem: '.$views.'</h6>
											<h4><a href="room-details.html">'.$name.'</a></h4>
											<a class="simple-btn" href="index.php?act=list_hotel_by_city&id_city='.$id_city.'"><i class="far fa-chevron-right"></i>Xem danh sách khách sạn</a> 
										</div>
									</div>
								</div>';
					?>				
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- Danh sách thành phố có views cao nhất End -->

	<!-- Danh sách khách sạn có views cao nhất-->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						<span class="subtitle__one">Danh sách khách sạn</span>
						<h2>Top khách sạn được tìm kiếm nhiều nhất</h2>
					</div>					
				</div>
			</div>
			
			<div class="row deluxe__area-active">
				<?php
					$list_hotel_view = getAll_hotel_view();
					foreach($list_hotel_view as $hotel_view) :
				?>
					<?php 
						extract($hotel_view);
						$listphong = "index.php?act=listphong&id_hotel=".$id_hotel;
						$hinh = $img_path.$img;

						echo '<div class="col-xl-4 col-lg-8 lg-mb-30">
									<div class="deluxe__area-item"> 
										<div class="deluxe__area-item-image">
											<img class="img__full" src="'.$hinh.'" alt="">
										</div>
										<div class="deluxe__area-item-content"> 
											<h6>Lượt xem: '.$views.'</h6>
											<h4><a href="room-details.html">'.$name.'</a></h4>
											<a class="simple-btn" href="'.$listphong.'"><i class="far fa-chevron-right"></i>Xem chi tiết khách sạn</a> 
										</div>
									</div>
								</div>';
					?>				
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- Danh sách khách sạn có views cao nhất End -->								

	<!-- Video Area Start -->
	<div class="video__area" data-background="assets/img/video.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xxl-6 col-xl-7 col-lg-8">
					<div class="video__area-title">
						<h2>Nhận ưu đãi và đặt phòng trực tuyến.</h2>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-5 col-lg-4">
					<div class="video__area-right">
						<div class="video__play">
							<a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Area End -->
	
	<!-- Blog Area Start -->	
	<div class="blog__area section-padding">
		<div class="container">
			<div class="row mb-60">
				<div class="col-xl-12">
					<div class="blog__area-title">
						<span class="subtitle__one">Our Blog</span>
						<h2>Bài viết và tin tức</h2>						
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">The ultimate guide to finding the best hotels in your area.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Đọc thêm<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item blog__area-item-hover">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Book a room Today most Affordable Rates.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Đọc thêm<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Hotel Booking is the best choice for hotel booking.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Đọc thêm<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->	


