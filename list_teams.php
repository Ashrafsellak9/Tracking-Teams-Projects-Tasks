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

$sql = "SELECT id, name, description, created_at FROM teams";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP | Teams List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header, .footer {
            background-color: #003366;
            color: #ffffff;
            padding: 15px 0;
        }
        .header img {
            height: 50px;
        }
        .footer {
            text-align: center;
        }
        .btn-custom {
            width: 200px;
            margin: 10px;
        }
    </style>
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
                    <a class="nav-link" href="create_project.php">Create projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_task.php">Create tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teams.php">Create teams</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header text-center">
        <img src="ocp.png" alt="OCP Logo">
        <h1>OCP Teams Management</h1>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">Manage Your Teams Efficiently</h2>
        <h2>Teams List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date de Création</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["created_at"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucune équipe trouvée</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="mt-3">
            <a href="teams.php" class="btn btn-secondary">Back to Previous Page</a>
        </div>
    </div>
    <div class="footer mt-5">
        <p>&copy; 2024 OCP. All rights reserved.</p>
    </div>
</body>
</html>

<?php
$conn->close();
?>



