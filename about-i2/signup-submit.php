<?php

ob_start();
include('db_connect.php');

$user_name = $email = $password = '';
$errors = array('user_name' => '', 'email' => '', 'password' => '', 'checkbox' => '');

if (isset($_POST['submit'])) {

    // Check user_name
    if (empty($_POST['user_name'])) {
        $errors['user_name'] = 'At least one user name is required <br />';
    } else {
        $user_name = $_POST['user_name'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $user_name)) {
            $errors['user_name'] = 'User name must be letters only <br />';
        }
    }

    // Check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address<br />';
        }
    }

    // Check password
    if (empty($_POST['password'])) {
        $errors['password'] = 'A password is required <br />';
    } else {
        $password = $_POST['password'];
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
            $errors['password'] = 'Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, and one number.';
        }
    }

    // Check if checkbox is checked
    if (!isset($_POST['choose'])) {
        $errors['checkbox'] = 'You must agree to the privacy policy <br />';
    }

    // Check for any errors
    if (array_filter($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = [
            'user_name' => $user_name,
            'email' => $email,
            'password' => $password,
        ];
        header('Location: signup.php');
        exit();
    } else {
       
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Escape special characters
        $user_name = mysqli_real_escape_string($conn, $user_name);
        $email = mysqli_real_escape_string($conn, $email);

    
        $sql = "INSERT INTO signup (user_name, password, email) VALUES ('$user_name', '$hashed_password', '$email')";

        // Save to the database and check
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
            exit(); // Important to stop further execution
        } else {
            echo "Query error: " . mysqli_error($conn);
        }
    }
}

ob_end_flush();
?>
