<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Docker World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #00aaff, #007acc);
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background: #ffffff11;
            border: 2px solid #ffffff44;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 350px;
        }

        h2 {
            font-size: 28px;
            color: #fff;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        button {
            background-color: #007acc;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #005f99;
        }

        .welcome-message {
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Docker World</h2>
        <p class="welcome-message">Please log in to explore the Docker universe.</p>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

