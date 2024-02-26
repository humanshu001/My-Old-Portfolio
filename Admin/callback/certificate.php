<?php

include "../../config/config.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $domain = $_POST['domain'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    $path = "../../Assets/Images/certificates/" . $image;
    move_uploaded_file($tmp_image, $path);

    $sql = "INSERT INTO `certificates` (`title`, `domain`, `image`) VALUES ('$title', '$domain', '$image')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../add_certificates.php");
    } else {
        header("Location: ../add_certificates.php?error=Something went wrong");
    }
} else {
    echo "Something went wrong";
}