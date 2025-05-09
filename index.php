<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/messages.php'); ?>
<link rel="stylesheet" href="styles.css">
<form method="GET" action="">
    <input type="text" name="search" class="search-bar" placeholder="Search by name or course">
    <button type="submit">Search</button>
</form>

<?php
$search = $_GET['search'] ?? '';
$query = "SELECT * FROM students WHERE name LIKE '%$search%' OR course LIKE '%$search%'";
$result = $conn->query($query);
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th><th>Email</th><th>Phone</th><th>Course</th><th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['course']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include('includes/footer.php'); ?>