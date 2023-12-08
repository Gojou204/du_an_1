<?php
session_start();

// Kiểm tra xem session user đã được đặt và có giá trị không
if (isset($_SESSION['user'])) {
    // Nếu session user tồn tại và có giá trị, gửi phản hồi 'logged_in'
    echo 'logged_in';
} else {
    // Nếu session user không tồn tại hoặc không có giá trị, gửi phản hồi 'not_logged_in'
    echo 'not_logged_in';
}
?>
