
   <!-- Page Banner Start -->
   <div class="page__banner" data-background="assets/img/banner/page-banner-8.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Thông tin đặt phòng</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>-</span>Đặt phòng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner End -->
   <!-- Blog Details Start -->
    <div class="blog__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-8 lg-mb-30">
                    <div class="blog__details-left">
                        <h3>Đặt phòng khách sạn</h3> <hr>
                        <p>Hãy chắc chắn rằng tất cả thông tin trên trang này là chính xác trước khi tiến hành thanh toán.</p>

                        <div class="blog__details-left-box">
                            <h4>Thông tin liên hệ</h4><br>
                            <?php
                            // Lấy thông tin khách hàng từ biến $account nếu có
                            if (isset($account)) {
                                extract($account);
                                echo '<form action="index.php?act=thanhtoan" method="POST">
                                    <label for="">Họ và tên</label>
                                    <input type="text" value="'.$full_name.'">
                                    <label for="">Số điện thoại</label>
                                    <input type="number" value="0'.$sdt.'">
                                    <label for="">Email</label>
                                    <input type="email" value="'.$email.'" name="'.$email.'"><br><br>
                                    <button type="submit" name="payUrl">Tiếp tục</button>
                                </form>';
                            } else {
                                // Nếu không có thông tin khách hàng, hiển thị form rỗng để nhập thông tin
                                echo '<form action="index.php?act=thanhtoan" method="POST">
                                    <label for="">Họ và tên</label>
                                    <input type="text" name="full_name" value="">
                                    <label for="">Số điện thoại</label>
                                    <input type="number" name="sdt" value="">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value=""><br><br>
                                    <button type="submit" name="payUrl">Tiếp tục</button>
                                </form>';
                            }
                            ?>
                                <!-- <form action="index.php?act=thanhtoan" method="POST">
                                    <label for="">Họ và tên</label>
                                    <input type="text">
                                    <label for="">Số điện thoại</label>
                                    <input type="number">
                                    <label for="">Email</label>
                                    <input type="email" name="email"><br><br>
                                    <button type="submit" name="payUrl">Tiếp tục</button>
                                </form> -->

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <!-- <div class="all__sidebar-item-search mb-40">
						<form action="#">
							<input type="text" placeholder="Search.....">
							<button type="submit"><i class="fal fa-search"></i></button>
						</form>
					</div> -->
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                           
                            <?php
                                extract($room);
                                echo '
                                <h5>'.$hotel_name.'</h5>
                                <span>Ngày nhận phòng: <input type="date" name=""> </span><br>
                                <span>Ngày trả phòng: <input type="date" name=""> </span><br><hr>
                                <h6>Loại phòng: (x1) '.$name.'</h6>
                                <span>Kiểu giường &emsp; &emsp; <b>'.$bed_name.'</b></span><br><br>
                                <img src="upload/dalat1.webp" alt="" width="90px"><br><br>
                                <h6>Thành tiền: &ensp; <b style="color:#B89146">'.$price.' VNĐ</b></h6>';
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Blog Details End -->
 