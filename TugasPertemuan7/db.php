<?php
$conn = mysqli_connect("localhost", "root", "", "collage");

if (!$conn) {
    die("konseki gagal: " . mysqli_connect_error());
}

?>