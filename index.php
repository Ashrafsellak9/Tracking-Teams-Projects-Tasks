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

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful";
            // Redirect to the home page or any other page
            header("Location: home.php");
            exit();
        } else {
            $message = "Invalid password";
        }
    } else {
        $message = "No user found with that username";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP - Login</title>
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">OCP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Get started</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="header text-center">
           <img src="ocp.png" alt="OCP Logo">
           <h1>OCP Teams Management</h1>
        </div><br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Login Form</h2>
                <?php if (!empty($message)): ?>
                    <div class="alert alert-danger"><?= $message ?></div>
                <?php endif; ?>
                <form action="" method="post">
                <div class="form-group">
                    <label for="loginUsername">Username</label>
                    <input type="text" class="form-control" id="loginUsername" name="username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div><br>
                <button type="submit" class="btn btn-success">Login</button>
                </form>
                <div class="mt-5 p-5 bg-dark text-white text-center">
                    <h2>Move work forward</h2>
                    <p>This is the easiest way for teams to track their work and get results.</p>
                    <button class="btn btn-light">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer mt-5">
        <p>&copy; 2024 OCP. All rights reserved.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
