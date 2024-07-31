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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM teams WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Team deleted successfully";
    } else {
        echo "Error deleting team: " . $conn->error;
    }
}

$conn->close();

header("Location: delete_teams.php");
exit();
?>
