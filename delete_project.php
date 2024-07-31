<?php
$servername = "localhost:9090";
$username = "root";
$password = "";
$dbname = "task_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $project_id = $_GET['id'];

    $sql = "DELETE FROM projects WHERE id=$project_id";

    if ($conn->query($sql) === TRUE) {
        echo "Project deleted successfully";
        header("Location: projects.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid project ID";
}

$conn->close();
?>
