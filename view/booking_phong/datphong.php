	<!-- Blog Details Start -->
    <br>
    <div class="blog__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-8 lg-mb-30">
                    <div class="blog__details-left">
                        <h3>Đặt phòng khách sạn</h3> <hr>
                        <p>Hãy chắc chắn rằng tất cả thông tin trên trang này là chính xác trước khi tiến hành thanh toán.</p>

                        <div class="blog__details-left-box">
                            <h4>Thông tin liên hệ</h4><br>
                            <form action="">
                                <label for="">Họ và tên</label>
                                <input type="text">
                                <label for="">Số điện thoại</label>
                                <input type="number">
                                <label for="">Email</label>
                                <input type="email"><br><br>
                                    <a href="index.php?act=about"><input type="button" value="Tiếp tục"></a>
                            </form>
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
                                $thanhtien =  $price * 1;
                                echo '
                                <h5>'.$hotel_name.'</h5>
                                <span>Ngày nhận phòng: <input type="date" name=""> </span><br>
                                <span>Ngày trả phòng: <input type="date" name=""> </span><br><hr>
                                <h6>Loại phòng:&emsp; '.$name.'</h6>Số phòng đặt<input type="number" min="1" max="5" value="1">
                                <br>
                                <span>Kiểu giường &emsp; &emsp; <b>'.$bed_name.'</b></span><br><br>
                                <img src="upload/hero.jpg" alt="" width="80px"><br><br>
                                <h6>Thành tiền: &ensp; <b style="color:#B89146">'.$thanhtien.' VNĐ</b></h6>';
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Blog Details End -->