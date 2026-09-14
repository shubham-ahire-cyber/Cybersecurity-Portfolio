<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? 0;
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $message = "✅ Student updated successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Edit Student</h1>
        <?php if ($message) echo "<p class='message'>$message</p>"; ?>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $student['name']; ?>" required>
            <input type="email" name="email" value="<?php echo $student['email']; ?>" required>
            <input type="text" name="phone" value="<?php echo $student['phone']; ?>" required>
            <input type="text" name="course" value="<?php echo $student['course']; ?>" required>
            <button type="submit">Update Student</button>
        </form>
        <a href="view-students.php" class="back-link">⬅ Back to Students</a>
    </div>
</body>
</html>
