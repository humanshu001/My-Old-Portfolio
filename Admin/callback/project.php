<?php
include '../../config/config.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    $path = "../../Assets/Images/projects/" . $image;
    move_uploaded_file($tmp_image, $path);

    $sql = "INSERT INTO `projects` (`title`, `description`, `image`) VALUES ('$title', '$description', '$image')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../add_projects.php");
    } else {
        header("Location: ../add_projects.php?error=Something went wrong");
    }
} else {
    echo "Something went wrong";
}   