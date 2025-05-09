<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/messages.php'); ?>

<h3>Add New Student</h3>
<form action="add_process.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="course" placeholder="Course" required><br>
    <button type="submit" name="add">Add Student</button>
</form>

<?php include('includes/footer.php'); ?>