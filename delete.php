<?php
include('config/db.php');

$id = $_GET['id'];
$query = "DELETE FROM students WHERE id=$id";

if ($conn->query($query)) {
    $_SESSION['message'] = "Student deleted!";
    $_SESSION['msg_type'] = "success";
} else {
    $_SESSION['message'] = "Delete failed: " . $conn->error;
    $_SESSION['msg_type'] = "error";
}

header("Location: index.php");
?>