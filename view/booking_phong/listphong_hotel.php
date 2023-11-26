<!-- Page Banner Start -->
<div class="page__banner" data-background="assets/img/banner/page-banner-6.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-title">
						<h1>Chi tiết khách sạn</h1>
						<div class="page__banner-title-menu">
							<ul>
								<li><a href="index.html">Thành phố</a></li>
								<li><span>-</span>Chi tiết khách sạn</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner End -->
<!-- Room Details Start -->
<div class="room__details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 lg-mb-30">
					<div class="all__sidebar">
						<div class="all__sidebar-item">
							<h5>Your Price</h5>
							<div class="all__sidebar-item-price">
								<ul>
									<li><i class="fal fa-bed-alt"></i>(3) giường</li>
									<li><i class="fal fa-users"></i>(6) khách mời</li>
								</ul>
								<h4>$219<span>/Đêm</span></h4>
								<a class="theme-btn" href="contact.html">Chọn phòng<i
										class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
						<div class="all__sidebar-item">
							<h5>Danh mục</h5>
							<div class="all__sidebar-item-category">
								<ul>
									<li><a href="#"><i class="far fa-angle-double-right"></i>Luxury
											Room<span>(08)</span></a></li>
									<li><a href="#"><i class="far fa-angle-double-right"></i>Small
											Suite<span>(06)</span></a></li>
									<li><a href="#"><i class="far fa-angle-double-right"></i>Single<span>(05)</span></a>
									</li>
									<li><a href="#"><i class="far fa-angle-double-right"></i>Family<span>(09)</span></a>
									</li>
									<li><a href="#"><i class="far fa-angle-double-right"></i>Double
											Room<span>(03)</span></a></li>
								</ul>
							</div>
						</div>
						<div class="all__sidebar-item">
							<h5>Đặt ngay</h5>
							<div class="all__sidebar-item-booking">
								<div class="all__sidebar-item-booking-item mb-10">
									<select name="select">
										<option value="1">Nhận phòng</option>
										<option value="2">Nhận phòng</option>
										<option value="3">Nhận phòng</option>
										<option value="4">Nhận phòng</option>
										<option value="5">Nhận phòng</option>
									</select>
								</div>
								<div class="all__sidebar-item-booking-item mb-10">
									<select name="select">
										<option value="1">Trả phòng</option>
										<option value="2">Trả phòng</option>
										<option value="3">Trả phòng</option>
										<option value="4">Trả phòng</option>
										<option value="5">Trả phòng</option>
									</select>
								</div>
								<div class="all__sidebar-item-booking-item mb-30">
									<select name="select">
										<option value="1">Phòng</option>
										<option value="2">Phòng</option>
										<option value="3">Phòng</option>
										<option value="4">Phòng</option>
										<option value="5">Phòng</option>
									</select>
								</div>
								<a class="theme-btn" href="#">Kiểm tra<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8">
					<div class="room__details-right">
						<div class="room__details-right-content">
							<h2 class="mb-25">Tên khách sạn</h2>
                            <p><i class="fa-sharp fa-solid fa-location-dot"></i>&ensp; Địa chỉ:</p>
							<div class="row mt-35 mb-35">
								<div class="col-sm-6 sm-mb-30">
									<img class="img__full" src="assets/img/hotel/hotel-24.jpg" alt="">
								</div>
								<div class="col-sm-6">
									<img class="img__full" src="assets/img/hotel/hotel-25.jpg" alt="">
								</div>
							</div>
							<h3 class="mb-25">Hướng dẫn đặc biệt khi làm thủ tục nhận phòng</h3>
							<p class="mb-25">Khi bước vào lễ tân, hãy đảm bảo rằng bạn đã chuẩn bị đầy đủ thông tin cần
								thiết, bao gồm hộ chiếu hoặc giấy tờ tùy thân và thông tin đặt phòng của bạn. Điều này
								giúp quá trình check-in diễn ra nhanh chóng hơn.</p>
							<p class="m-0">Quá trình nhận phòng không chỉ là bước khởi đầu cho chuyến đi của bạn mà còn
								là cơ hội để bạn tận hưởng mọi dịch vụ và tiện ích mà khách sạn có để cung cấp.</p>
						</div>
                        <!-- Danh sách loại phòng khách sạn -->
						<div>
						<?php foreach($list_bed as $bed){
							extract($bed);
							$bed['name'] = $name;
						}?>
                            <?php foreach($list_a_room as $lr){
                                extract($lr);
                                    echo'<div class="room__list-item">
                                    <div class="room__list-item-left">
                                        <div class="room__list-item-image">
                                            <img src="assets/img/hotel/hotel-19.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="room__list-item-right">
                                        <div class="room__list-item-right-content">
                                            <h4>'.$name.'</h4>
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>'.$id_bed.'</li>
                                                <li><i class="fal fa-users"></i>Khách</li>
                                            </ul><hr>
                                            <p>'.$about.'</p>
                                        </div>
                                        <div class="room__list-item-right-meta">
                                            <div class="room__list-item-right-meta-top">
                                                <span>'.$price.'VNĐ</span>
                                                <p>/Phòng/Đêm</p>
                                                <p><i class="fas fa-star"></i><span>4.9</span></p>
                                            </div>
                                            <a class="simple-btn" href="#">Đặt ngay</a>
                                        </div>
                                    </div>
                                    </div>';
                                
                            } ?>
                        </div>

						<div class="room__details-right-faq mt-50">
							<div class="room__details-right-faq-item">
								<div class="room__details-right-faq-item-card">
									<div class="room__details-right-faq-item-card-header">
										<h5>Bạn trả tiền trước hay sau khi đặt phòng khách sạn?</h5>
										<i class="far fa-long-arrow-up"></i>
									</div>
									<div class="room__details-right-faq-item-card-header-content active">
										<p>Để tránh bất kỳ hiểu lầm nào, quan trọng nhất là đọc kỹ thông tin khi bạn
											thực hiện đặt phòng và liên hệ trực tiếp với khách sạn nếu bạn có bất kỳ câu
											hỏi nào về quy trình thanh toán cụ thể của họ.</p>
									</div>
								</div>
							</div>
							<div class="room__details-right-faq-item">
								<div class="room__details-right-faq-item-card">
									<div class="room__details-right-faq-item-card-header">
										<h5>Đặt phòng khách sạn cần những giấy tờ gì?</h5>
										<i class="far fa-long-arrow-down"></i>
									</div>
									<div class="room__details-right-faq-item-card-header-content display-none">
										<p>Việc đặt phòng khách sạn là một phần quan trọng trong quá trình chuẩn bị cho
											chuyến đi của bạn. Để đảm bảo một trải nghiệm lưu trú suôn sẻ và không có
											bất kỳ vấn đề nào, có một số điều cần lưu ý khi thực hiện quy trình đặt
											phòng.</p>
									</div>
								</div>
							</div>
							<div class="room__details-right-faq-item">
								<div class="room__details-right-faq-item-card">
									<div class="room__details-right-faq-item-card-header">
										<h5>Khách sạn có tính phí thẻ của bạn trước khi bạn nhận phòng không?</h5>
										<i class="far fa-long-arrow-down"></i>
									</div>
									<div class="room__details-right-faq-item-card-header-content display-none">
										<p>Quan trọng nhất là bạn cần kiểm tra kỹ các điều khoản và điều kiện của đặt
											phòng hoặc liên hệ trực tiếp với khách sạn để hiểu rõ về chính sách thanh
											toán cụ thể của họ. Lưu ý rằng khi sử dụng các nền tảng đặt phòng của bên
											thứ ba, quy trình thanh toán có thể phụ thuộc vào chính sách của nền tảng đó
											và loại giá bạn chọn.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Room Details End -->