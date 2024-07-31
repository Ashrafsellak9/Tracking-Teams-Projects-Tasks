<?php
$servername = "localhost:9090";
$username = "root";
$password = "";
$dbname = "task_management";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $task_id = $_GET['id'];

    $sql = "SELECT * FROM tasks WHERE id=$task_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $task = $result->fetch_assoc();
    } else {
        echo "Task not found";
        exit();
    }
} else {
    echo "Invalid task ID";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">OCP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tasks.php">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_project.php">Create Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_task.php">Create Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h2>Task Details</h2>
        <p><strong>Task Name:</strong> <?php echo $task['task_name']; ?></p>
        <p><strong>Task Description:</strong> <?php echo $task['task_description']; ?></p>
        <p><strong>Due Date:</strong> <?php echo $task['due_date']; ?></p>
        <a href="tasks.php" class="btn btn-primary">Back to Tasks</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
