<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container" style="max-width: 800px;">
        <h1>All Students</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['course']; ?></td>
<td>
    <a href="edit-student.php?id=<?php echo $row['id']; ?>">✏️ Edit</a> |
    <a href="delete-student.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this student?')">🗑️ Delete</a>
</td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a href="dashboard.php" class="back-link">⬅ Back to Dashboard</a>
    </div>
</body>
</html>
