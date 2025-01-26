<?php
$servername = "db"; // Match the service name in docker-compose.yml
$username = "binay";
$password = "password123";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = md5($_POST['password']); // Hash the password to match DB

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $inputUsername, $inputPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Display colorful success message
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Successful</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background: linear-gradient(135deg, #00c6ff, #0072ff);
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    color: #fff;
                }

                .container {
                    text-align: center;
                    background: rgba(255, 255, 255, 0.1);
                    border: 2px solid rgba(255, 255, 255, 0.3);
                    border-radius: 15px;
                    padding: 20px 30px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                }

                h1 {
                    font-size: 32px;
                    margin-bottom: 20px;
                }

                p {
                    font-size: 18px;
                }

                a {
                    display: inline-block;
                    margin-top: 20px;
                    color: #007acc;
                    text-decoration: none;
                    background-color: #ffffff;
                    padding: 10px 20px;
                    border-radius: 5px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                }

                a:hover {
                    background-color: #f0f0f0;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Login Successful!</h1>
                <p>Welcome to Docker World, <b>$inputUsername</b>!</p>
                <a href="index.html">Go to Home</a>
            </div>
        </body>
        </html>
        HTML;
    } else {
        // Invalid login, display error and redirect to login
        echo "<script>
                alert('Invalid username or password.');
                window.location.href='index.html';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>

