<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'tsl');
mysqli_query($connection, "SET NAMES 'utf8'");

if (!$connection) {
    exit('Kết nối không thành công!');
}
?>