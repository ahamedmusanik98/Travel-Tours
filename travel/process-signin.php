<?php

// Establish database connection
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {

    // Retrieve form data
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Select the appropriate table based on role
    if ($role === 'admin') {
        $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    } else {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    }

    // Execute the query
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role === 'admin') {
            $_SESSION['success_message'] = "Welcome, Admin!";
            header('location:admin-dashboard.php');
        } else {
            $_SESSION['success_message'] = "Welcome, User!";
            header('location:user-dashboard.php');
        }
    } else {
        echo "<script>alert('Invalid credentials! Please try again.'); window.location.href='signin.php';</script>";
    }

} else {
    echo 'Something went wrong, please try again!';
}

// Close the database connection
mysqli_close($connection);

?>
