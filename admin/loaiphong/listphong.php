    <!-- Content -->
    <main>
        <div class="top_main">
            <div class="title">
                <h1>DANH SÁCH PHÒNG</h1>
            </div>

            <div class="add">
                <button type="button"><a href="#">Thêm mới</a></button>
            </div>
        </div>

        <div class="main_content">
            <table>
                <tr>
                    <th>Tên khách sạn</th>
                    <th>Tên loại phòng</th>
                    <th>Hình</th>
                    <th>Giá tiền</th>
                    <th>Mô tả</th>
                    <th>Loại giường</th>
                    <th>Tools</th>
                </tr>

                <?php foreach($list_room as $room) : ?>
                    <?php 
                        extract($room);

                        $suaphong = "index.php?act=suaphong&id_room=".$id_room;
                        $xoaphong = "index.php?act=xoa_loaiphong&id_room=".$id_room;

                        echo '<tr>
                                <td>'.$hotel_name.'</td>
                                <td>'.$name.'</td>
                                <td>
                                    <img src="'.$img.'" alt="" width="150px">
                                </td>
                                <td style="color: red; text-align: center">'.$price.' VND</td>
                                <td style="max-width: 300px">'.$about.'</td>
                                <td style="text-align: center">'.$bed_name.'</td>
                                <td>
                                    <a href="'.$suaphong.'"><i class="fa-solid fa-pencil"></i></a>
                                    <a onclick="return confirm(\'Bạn chắc chắn muốn xóa bản ghi này?\');"  href="'.$xoaphong.'">
                                        <i class="fa-solid fa-trash red"></i>
                                    </a>
                                </td>
                            </tr>';
                    ?>
                <?php endforeach ?>

                <!-- <tr>
                    <td>Suite room</td>
                    <td>
                        <img src="" alt="">
                    </td>
                    <td>Loại phòng hội nghị - rộng rãi cho nhiều người sử dụng</td>
                    <td>Giường đôi</td>
                    <td>
                        <ul>
                            <li>Wifi free</li>
                            <li>Lễ tân 24h</li>
                            <li>Vòi tắm đứng</li>
                        </ul>
                    </td>
                    <td>
                        <a href="#"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#"><i class="fa-solid fa-trash red"></i></a>
                    </td>
                </tr> -->
            </table>
        </div>
    </main>
    <!-- End Content -->
</div>