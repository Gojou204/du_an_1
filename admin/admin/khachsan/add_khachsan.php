<!-- Content -->
<main>
    <div class="top_main">
        <div class="title">
            <h1>THÊM MỚI KHÁCH SẠN</h1>
        </div>

        <div class="add">
            <a href="#" style="color: blue; text-decoration: underline;">Quay lại trang danh sách</a>
        </div>
    </div>

    <div class="main_content shadow">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form_flex">
                <div class="form_group">
                    <div class="form_title">
                        <label for="">Nhập tên khách sạn</label>
                    </div>
                    
                    <div class="form_ctrl">
                        <input type="text" name="name" id="" value="">
                    </div>
                </div>

                <div class="form_group">
                    <div class="form_title">
                        <label for="">Chọn ảnh</label>
                    </div>
                    
                    <div class="form_ctrl">
                        <input type="file" name="img" id="" value="">
                    </div>
                </div>

                <div class="form_group">
                    <div class="form_title">
                        <label for="">Nhập địa chỉ</label>
                    </div>
                    
                    <div class="form_ctrl">
                        <input type="text" name="address" id="" value="">
                    </div>
                </div>

                <div class="form_group">
                    <div class="form_title">
                        <label for="">Nhập mô tả</label>
                    </div>
                    
                    <div class="form_ctrl">
                        <textarea name="about" id="" cols="30" rows="10" style="resize: none;"></textarea>
                    </div>
                </div>

                <div class="form_row">
                    <div class="form_group">
                        <div class="form_title">
                            <label for="">Nhập lượt xem</label>
                        </div>
                        
                        <div class="form_ctrl">
                            <input type="number" name="views" id="" value="0">
                        </div>
                    </div>
    
                    <div class="form_group">
                        <div class="form_title">
                            <label for="">Chọn thành phố</label>
                        </div>
                                           
                        <div class="form_ctrl">
                            <select name="city" id="">
                                <option value="0">--Chọn thành phố--</option>
                                <?php foreach($list_city as $city) : ?>
                                    <?php
                                        extract($city);
                                        echo '<option value="'.$id_city.'">'.$name.'</option>';    
                                    ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="button_group">
                    <button type="submit" name="themmoi">Thêm mới</button>
                    <button type="reset">Nhập lại</button>
                </div>
            </div>
        </form>
    </div>
</main>
<!-- End Content -->