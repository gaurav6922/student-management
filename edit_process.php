<?php
include('config/db.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $course = $conn->real_escape_string($_POST['course']);

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";

    if ($conn->query($query)) {
        $_SESSION['message'] = "Student updated!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Update failed: " . $conn->error;
        $_SESSION['msg_type'] = "error";
    }

    header("Location: index.php");
}
?>