    <!-- Content -->
    <main>
        <div class="top_main">
            <div class="title">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>

            <div class="add">
                <button type="button"><a href="index.php?act=add_taikhoan">Thêm mới</a></button>
            </div>
        </div>

        <div class="main_content">
            <table>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Căn cước</th>
                </tr>

                <?php foreach($listtaikhoan as $tk) : ?>
                    <?php 
                        extract($tk);

                        $xoatk = "index.php?act=xoa_taikhoan&id_taikhoan=".$id_taikhoan;

                        echo '<tr>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$full_name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$dia_chi.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$cccd.'</td>
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
