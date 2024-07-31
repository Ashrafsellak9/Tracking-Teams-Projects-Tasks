<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Récupérer les projets depuis la base de données
$projects = $conn->query("SELECT * FROM projects");

// Récupérer les équipes depuis la base de données
$teams = $conn->query("SELECT * FROM teams");

// Récupérer les tâches depuis la base de données
$tasks = $conn->query("SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tracking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            margin-top: auto;
        }
        .btn-custom {
            width: 200px;
            margin: 10px;
        }

        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #007bff;
            color: white;
        }

        .list-group-item {
            background-color: #ffffff;
            border: 1px solid #dddddd;
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
    <div class="container mt-5">
        <div class="header text-center">
           <img src="ocp.png" alt="OCP Logo">
           <h1>OCP Teams, Projects, Tasks Management</h1>
        </div><br>
        <div class="jumbotron text-center">
            <h1>Welcome!</h1>
            <p>Track your work and get results.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Projects</h3>
                <button class="btn btn-success mb-3"><a href="create_project.php" style='color: white';>Create Project</a></button>
                <ul class="list-group">
                    <?php while($project = $projects->fetch_assoc()): ?>
                        <li class="list-group-item">
                            <h5><?= $project['project_name'] ?></h5>
                            <p><?= $project['project_description'] ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Teams</h3>
                <button class="btn btn-success mb-3"><a href="teams.php" style='color: white';>Create Team</a></button>
                <ul class="list-group">
                    <?php while($team = $teams->fetch_assoc()): ?>
                        <li class="list-group-item">
                            <h5><?= $team['name'] ?></h5>
                            <p><?= $team['description'] ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Tasks</h3>
                <button class="btn btn-success mb-3"><a href="create_task.php" style='color: white';>Create Task</a></button>
                <ul class="list-group">
                    <?php while($task = $tasks->fetch_assoc()): ?>
                        <li class="list-group-item">
                            <h5><?= $task['task_name'] ?></h5>
                            <p><?= $task['task_description'] ?></p>
                            <small>Due: <?= $task['due_date'] ?></small>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
