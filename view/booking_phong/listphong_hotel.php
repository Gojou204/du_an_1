
<!-- Page Banner Start -->
<div class="page__banner" data-background="assets/img/banner/page-banner-6.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-title">
						<h1>Chi tiết khách sạn</h1>
						<?php
							
							extract($hotel);
							echo'<div class="page__banner-title-menu">
							<ul>
								<li>'.$name.'</li>
							</ul>
							</div>';
						?>
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
							<h5>Tiện ích</h5>
							<div class="all__sidebar-item-price">
								<ul>
									<li><i class="fa-solid fa-utensils"></i>Máy lạnh</li>
									<li><i class="fa-solid fa-utensils"></i>Nhà hàng</li>
									<li><i class="fa-solid fa-utensils"></i>Lễ tân 24h</li>
									<li><i class="fa-solid fa-utensils"></i>Chỗ đậu xe</li>
									<li><i class="fa-solid fa-utensils"></i>Thang máy</li>
									<li><i class="fa-solid fa-utensils"></i>WiFi</li>
								</ul>
							</div>
						</div>
						<div class="all__sidebar-item">
							<h5>Danh sách phòng</h5>
							<div class="all__sidebar-item-category">
								<?php foreach($list_a_room as $lr){
									extract($lr);
									echo '	<ul>
											<li><a href="#"><i class="far fa-angle-double-right"></i>'.$name.'</a></li></ul>';
								}?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8">
					<div class="room__details-right">
						<?php 
								extract($hotel);
								echo'<div class="room__details-right-content">
								<h2 class="mb-25">'.$name.'</h2>
								<p><i class="fa-sharp fa-solid fa-location-dot"></i>&ensp;'.$address.'</p>
								<div class="row mt-35 mb-35">
									<div class="col-sm-6 sm-mb-30">
										<img class="img__full" src="'.$img_path.$img.'" alt="">
									</div>
									<div class="col-sm-6">
										
									</div>
								</div>
								<div>
									<h4 class="mb-25">Giới thiệu khách sạn</h4>
									<p class="mb-25">'.$about.'</p>									
								</div>
								</div>
								<h3>Danh sách loại phòng tại '.$name.'</h3>';
						?><br><br>
                        <!-- Danh sách loại phòng khách sạn -->
						<div>
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
                                                <li><i class="fal fa-bed-alt"></i>'.$bed_name.'</li>
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
                                            <a class="simple-btn" href="?act=datphong&id_room='.$id_room.'">Đặt ngay</a>
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


