<?php
include('config/db.php');

if (isset($_POST['add'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $course = $conn->real_escape_string($_POST['course']);

    $query = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
    if ($conn->query($query)) {
        $_SESSION['message'] = "Student added successfully!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Error: " . $conn->error;
        $_SESSION['msg_type'] = "error";
    }

    header("Location: index.php");
}
?>