<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP | Add Team</title>
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
        <h2>Add a Team</h2>
        <form action="add_team_process.php" method="POST">
            <div class="form-group">
                <label for="name">Name of the team</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <div class="mt-3">
            <a href="teams.php" class="btn btn-secondary">Back to Previous Page</a>
        </div>
    </div>
    <div class="footer mt-5">
        <p>&copy; 2024 OCP. All rights reserved.</p>
    </div>
</body>
</html>
