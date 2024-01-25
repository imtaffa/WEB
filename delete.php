<?php
include "config.php";

$email = $_POST['email'];

if($pelanggan_data->deletepelanggan($email)) {
    echo "success";
} else {
    echo "gagal";
}
?>