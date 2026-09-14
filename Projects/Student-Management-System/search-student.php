<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$search = "";
$result = null;

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM students WHERE name LIKE '%$search%' OR id = '$search'";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container" style="max-width: 800px;">
        <h1>Search Student</h1>
        <form method="GET">
            <input type="text" name="search" placeholder="Enter name or ID" value="<?php echo $search; ?>">
            <button type="submit">Search</button>
        </form>

        <?php if ($result && $result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Course</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['course']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php elseif ($result): ?>
            <p>No students found.</p>
        <?php endif; ?>

        <a href="dashboard.php" class="back-link">⬅ Back to Dashboard</a>
    </div>
</body>
</html>
