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
				<form action="#">
					<div class="check__area">
						<div class="check__area-item">
								<p>Thành phố hoặc tên khách sạn:</p>
								<input type="text" name="listcity" id="listcity" list="city">
								<datalist id="city">
									<?php foreach ($list_city as $city) : ?>
										<?php
											extract($city);
											echo '<option value="'.$name.'">';
										?>
									<?php endforeach ?>
									<?php foreach ($list_hotel as $hotel) : ?>
										<?php
											extract($hotel);
											echo '<option value="'.$hotel['name']. '">';
										?>
									<?php endforeach ?>
								</datalist>
						</div>
						<div class="check__area-item">						
							<p>Ngày nhận phòng:</p>
							<input type="date" name="date_checkin" id="date_check"> 
						</div>
						<div class="check__area-item">		
							<p>Ngày trả phòng:</p>
							<input type="date" name="date_checkout" id="date_check">
							<!-- <input type="number" name="" id="number_room"> -->
							<!-- <select name="select">
								<option value="1">Người lớn</option>
								<option value="2">Trẻ em</option>
								<option value="3">Phòng</option>
							</select> -->					
						</div>
						<div class="check__area-item button">
							<button class="theme-btn" type="submit">Kiểm tra ngay</button>							
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
	<!-- Deluxe Area Start -->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						<span class="subtitle__one">Danh sách phòng</span>
						<h2>Phòng cao cấp</h2>
					</div>					
				</div>
				<div class="col-xl-7">
					<div class="deluxe__area-btn">
						<ul>
							<li class="active" data-filter="*">All Rooms</li>
							<li data-filter=".luxury">Luxury</li>
							<li data-filter=".single">Single</li>
							<li data-filter=".suite">Small Suite</li>
							<li data-filter=".family">Family</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-3 col-lg-4 mb-30 suite">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-1.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$134</span> / Night</a></h6>
							<h4><a href="room-details.html">Small Suite</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 mb-30 suite">
					<div class="deluxe__area-item deluxe__area-item-hover"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-2.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$199</span> / Night</a></h6>
							<h4><a href="room-details.html">Deluxe Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 mb-30 family">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-3.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$319</span> / Night</a></h6>
							<h4><a href="room-details.html">Family Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 lg-mb-30 single">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-4.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$169</span> / Night</a></h6>
							<h4><a href="room-details.html">Single Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 luxury">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-5.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Deluxe Area End -->
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
	<!-- Services Area Start -->
	<div class="services__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/cleaning.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Dọn phòng</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/wifi.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Wifi</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/location.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Đưa đón</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- Feature Area Start -->
	<div class="feature__area">
		<div class="container">
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-1.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Đồ ăn</span>
							<h2>Nhà hàng cao cấp</h2>
							<p>Nơi hội tụ của ẩm thực đặc sắc và phục vụ chuyên nghiệp, nhà hàng của chúng tôi là địa điểm lý tưởng cho cả bữa trưa công suất và dạ tiệc gia đình ấm cúng. Hãy đến và trải nghiệm không gian ẩm thực độc đáo của chúng tôi.</p>
							<a class="theme-border-btn" href="services-details.html">Xem thêm<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-right mb-60">
				<div class="col-xl-6 col-lg-6  order-last order-lg-first">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Đọc sách</span>
							<h2>Thư viện</h2>
							<p>Khám phá thế giới tư duy tại thư viện của chúng tôi - một không gian yên bình, nơi bạn có thể ngồi thoải mái, đắm chìm trong sách, và tận hưởng không gian trí tuệ.</p>
							<a class="theme-border-btn" href="services-details.html">Xem thêm<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-3.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Fitness</span>
							<h2>Phòng tập</h2>
							<p>Chào đón bạn đến với phòng tập hiện đại của chúng tôi, nơi khám phá sức khỏe mới và đắm chìm trong không gian tích cực, tràn đầy động lực để tập luyện.</p>
							<a class="theme-border-btn" href="services-details.html">Xem thêm<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-right">
				<div class="col-xl-6 col-lg-6 order-last order-lg-first">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Experiences</span>
							<h2>Hồ bơi</h2>
							<p>Hòa mình trong sự tận hưởng tại hồ bơi của chúng tôi, nơi nước trong xanh và không khí tĩnh lặng tạo nên bức tranh hoàn hảo cho mỗi buổi thư giãn và đắm chìm trong sự sảng khoái.</p>
							<a class="theme-border-btn" href="services-details.html">Xem thêm<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-4.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Feature Area End -->
	<!-- Testimonial Area Start -->	
	<div class="testimonial__area section-padding pb-0"> 
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
				   <div class="testimonial__area-bg">
					<div class="swiper testimonial__slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-1.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>Lisa</h4>										
										<span>Singer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-2.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>David Fincher</h4>										
										<span>UX Designer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-3.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>Ridley Scott</h4>										
										<span>UX Designer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial__area-item-dots">
						<div class="pagination"></div>
					</div>
				   </div>
				</div>
			</div>
		</div>
	</div>	    
	<!-- Testimonial Area End -->	
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