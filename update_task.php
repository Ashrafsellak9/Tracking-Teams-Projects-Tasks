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

// Récupérer les données de la tâche à partir de l'ID
$task_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($task_id === 0) {
    die("Task ID is required");
}

$sql = "SELECT * FROM tasks WHERE id=$task_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $task = $result->fetch_assoc();
} else {
    echo "Task not found";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $conn->real_escape_string($_POST['taskName']);
    $taskDescription = $conn->real_escape_string($_POST['taskDescription']);
    $dueDate = $conn->real_escape_string($_POST['dueDate']);

    $sql = "UPDATE tasks SET task_name='$taskName', task_description='$taskDescription', due_date='$dueDate' WHERE id=$task_id";

    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully";
        header("Location: tasks.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">OCP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
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
        <h2>Edit Task</h2>
        <form action="update_task.php?id=<?php echo $task_id; ?>" method="post">
            <div class="form-group">
                <label for="taskName">Task Name</label>
                <input type="text" class="form-control" id="taskName" name="taskName" value="<?php echo htmlspecialchars($task['task_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="taskDescription">Task Description</label>
                <textarea class="form-control" id="taskDescription" name="taskDescription" rows="4" required><?php echo htmlspecialchars($task['task_description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="dueDate">Due Date</label>
                <input type="date" class="form-control" id="dueDate" name="dueDate" value="<?php echo htmlspecialchars($task['due_date']); ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
