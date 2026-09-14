<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?php echo $_SESSION['user']; ?>! 👋</h1>
        <p>Student Management System Dashboard</p>
        <div class="menu">
            <a href="add-student.php">➕ Add Student</a>
            <a href="view-students.php">📋 View Students</a>
            <a href="search-student.php">🔍 Search Student</a>
            <a href="logout.php">🚪 Logout</a>
        </div>
    </div>
</body>
</html>
