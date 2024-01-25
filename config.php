<?php
$con = mysqli_connect("localhost:3307", "root", "", "pelanggan");

function addpelanggan( $data )
{
    global $con;
    $name = $data['name'];
    $email = $data['email'];

    mysqli_query($con, "INSERT INTO pelanggan VALUES ('$name','$email')");

    if(mysqli_affected_rows($con) > 0) :
        return true;
    else:
        return false;
    endif;
}

function getallpelanggan()
{
    global $con;

    $result = mysqli_query($con, "SELECT * FROM pelanggan");
    $pelanggan_data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $pelanggan_data[] = $row;
    }

    return $pelanggan_data;
}

class PelangganData {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function getallpelanggan() {
        $result = mysqli_query($this->con, "SELECT * FROM pelanggan");
        $pelanggan_data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $pelanggan_data[] = $row;
        }

        return $pelanggan_data;
    }
}

$pelanggan_data = new PelangganData($con);
$all_pelanggan = $pelanggan_data->getallpelanggan();