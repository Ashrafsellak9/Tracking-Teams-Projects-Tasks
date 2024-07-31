<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP | Teams Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_project.php">Create Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Teams Management</h2>
        <div class="mt-4">
            <a href="add_team.php" class="btn btn-primary btn-lg">Add a Team</a>
            <a href="list_teams.php" class="btn btn-secondary btn-lg">Show Teams</a>
        </div>
    </div> 

    
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP | Teams Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
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
            padding: 10px;
            font-size: 0.9em;
        }
        .btn-custom {
            width: 100%;
            margin: 5px 0;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-custom:hover {
            color: #ffffff !important;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .container {
            margin-top: 30px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card-custom {
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
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
                    <a class="nav-link" href="create_project.php">Create Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_task.php">Create Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teams.php">Create Teams</a>
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
        <div class="card card-custom">
            <h3 class="text-center">Team Options</h3>
            <div class="d-flex justify-content-around flex-wrap mt-4">
                <a href="add_team.php" class="btn btn-primary btn-lg btn-custom">Add a Team</a>
                <a href="list_teams.php" class="btn btn-warning btn-lg btn-custom">Show Teams</a>
                <a href="delete_teams.php" class="btn btn-danger btn-lg btn-custom">Delete Teams</a>
                <a href="home.php" class="btn btn-secondary btn-lg btn-custom">Home</a>
            </div>
        </div>
    </div>
    <div class="footer mt-5">
        <p>&copy; 2024 OCP. All rights reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
