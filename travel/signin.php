<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Travel Agency</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/signin-bg.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signin-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .signin-container h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .signin-container form {
            display: flex;
            flex-direction: column;
        }

        .signin-container input[type="text"],
        .signin-container input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .signin-container select {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .signin-container button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
        }

        .signin-container button:hover {
            background: #0056b3;
        }

        .signin-container .extra-links {
            text-align: center;
            margin-top: 10px;
        }

        .signin-container .extra-links a {
            text-decoration: none;
            color: #007bff;
        }

        .signin-container .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="signin-container">
        <h1>Sign In</h1>
        <form action="process-signin.php" method="POST">
            <label for="role">Sign In As</label>
            <select id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Sign In</button>
        </form>
        <div class="extra-links">
            <p><a href="register.php">Don't have an account? Register here</a></p>
        </div>
    </div>

</body>

</html>