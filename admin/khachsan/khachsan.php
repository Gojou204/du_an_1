<!-- Content -->
<main>
    <div class="top_main">
        <div class="title">
            <h1>DANH SÁCH KHÁCH SẠN</h1>
        </div><br>
        <div class="add">
            <?php
                // Tạo đường dẫn thêm bản ghi khách sạn mới
                $add_khachsan = "index.php?act=add_khachsan";
            ?>
            <button type="button"><a href="<?= $add_khachsan ?>">Thêm mới</a></button>
        </div>
    </div>

    <div class="main_content">
        <table>
            <tr>
                <th>Tên khách sạn</th>
                <th>Hình ảnh</th>
                <th>Địa chỉ</th>
                <th>Mô tả</th>
                <th>Lượt xem</th>
                <th>Tools</th>
            </tr>

            <?php foreach($list_hotel as $hotel) : ?>
                <?php 
                    // hàm extract giúp chuyển đổi các trường dữ liệu có trong bảng thành các biến có tên của trường dữ liệu
                    extract($hotel);
                    $hinh = "../".$img_path.$img;

                    // Dùng $xoa lỗi url %27.số id.27% ????
                    $suaks = "index.php?act=suaks&id_hotel=".$id_hotel;
                    $xoaks = "index.php?act=xoaks&id_hotel=".$id_hotel;
                
                    echo '<tr>
                            <td>'.$name.'</td>
                            <td>
                                <img src="'.$hinh.'" alt="" width=150px;>
                            </td>
                            <td>'.$address.'</td>
                            <td>'.$about.'</td>
                            <td style="text-align: center">'.$views.'</td>
                            <td>
                                <a href="'.$suaks.'"><i class="fa-solid fa-pencil"></i></a>

                                <a onclick="return confirm(\'Bạn chắc chắn muốn xóa bản ghi này?\');"  href="'.$xoaks.'">
                                    <i class="fa-solid fa-trash red"></i>
                                </a>
                            </td>
                        </tr>';
                ?>      
            <?php endforeach ?>
        </table>
        
    </div>
</main>
<!-- End Content -->
</div>
