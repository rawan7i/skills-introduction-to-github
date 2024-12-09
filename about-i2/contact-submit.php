<?php
session_start();
ob_start();
include('db_connect.php');

$users_uid = $text_area = $users_email = '';
$errors = array('email' => '', 'user_name' => '', 'text_area' => '', 'checkbox' => '');

if (isset($_POST['submit'])) {

    // Check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $users_email = $_POST['email'];
        if (!filter_var($users_email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address<br />';
        }
    }

    // Check text area
    if (empty($_POST['text_area'])) {
        $errors['text_area'] = 'You must write a message <br />';
    } else {
        $text_area = $_POST['text_area'];
        if (!preg_match('/[a-zA-Z\s]+$/', $text_area)) {
            $errors['text_area'] = 'It must be letters only';
        }
    }

    // Check user_name
    if (empty($_POST['user_name'])) {
        $errors['user_name'] = 'At least one user name is required <br />';
    } else {
        $users_uid = $_POST['user_name'];
        if (!preg_match('/[a-zA-Z\s]+$/', $users_uid)) {
            $errors['user_name'] = 'User name must be letters only <br />';
        }
    }

    // Check if checkbox is checked
    if (!isset($_POST['choose'])) {
        $errors['checkbox'] = 'You must agree to the privacy policy <br />';
    }

    // Check for any errors
    if (array_filter($errors)) {

        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header('Location: contact.php');
        exit();
    } else {

        $users_email = mysqli_real_escape_string($conn, $users_email);
        $text_area = mysqli_real_escape_string($conn, $text_area);
        $users_uid = mysqli_real_escape_string($conn, $users_uid);


        $sql = "INSERT INTO users (users_email, users_uid, text_area) VALUES ('$users_email', '$users_uid', '$text_area')";

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
