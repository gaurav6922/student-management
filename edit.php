<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/messages.php'); ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$row = $result->fetch_assoc();
?>

<h3>Edit Student</h3>
<form action="edit_process.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <input type="text" name="name" value="<?= $row['name']; ?>" required><br>
    <input type="email" name="email" value="<?= $row['email']; ?>" required><br>
    <input type="text" name="phone" value="<?= $row['phone']; ?>" required><br>
    <input type="text" name="course" value="<?= $row['course']; ?>" required><br>
    <button type="submit" name="update">Update Student</button>
</form>

<?php include('includes/footer.php'); ?>