<?php

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

?>