<?php
session_start();
include_once("signup-submit.php");
include_once('db_connect.php');

$user_name = $_SESSION['form_data']['user_name'] ?? '';
$email = $_SESSION['form_data']['email'] ?? '';
$password = $_SESSION['form_data']['password'] ?? '';
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors'], $_SESSION['form_data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
</head>

<body style="background-color: #e7e6d5fd;">
    <div class="coustom-background d-flex flex-column justify-content-end text-center">
        <nav class="navbar bg-warning">
            <div class="container-fluid d-flex justify-content-start align-items-center">
                <a class="navbar-brand text-light" href="index.php">MI</a>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="contact.php">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>

        <div class="container" style="max-width: 900px;">
            <div class="text-center m-5 ">
                <h3>Sign Up</h3>
                <p>Don't have an account? Sign Up </p>
            </div>
            <div class="card mb-8 sm-4">
                <div class="row no-gutters">
                    <div class="col middle">
                        <img src="images/signup3.png" class="img-center" alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <!-- <h5 class="card-title"> Sign Up </h5> -->
                            <form action="signup.php" method="post">
                                <div class="mb-3">
                                    <label for="user_name">Name</label>
                                    <input id="user_name" type="text" class="form-control" name="user_name" placeholder="Enter your name ..." value="<?php echo htmlspecialchars($user_name); ?>">
                                    <div class="text-danger"><?php echo $errors['user_name'] ?? ''; ?></div>

                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email ..." value="<?php echo htmlspecialchars($email); ?>">
                                    <div class="text-danger"><?php echo $errors['email'] ?? ''; ?></div>

                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password ..." value="<?php echo htmlspecialchars($password); ?>">
                                    <button type="button" class="btn btn-outline-secondary toggle-password" id="togglePassword">
                                        Show
                                    </button>
                                    <div class="text-danger"><?php echo $errors['password'] ?? ''; ?></div>

                                    <input type="checkbox" name="choose" id="choose">
                                    <label for="choose">I agree to the privacy policy</label>
                                    <div class="text-danger"><?php echo $errors['checkbox'] ?? ''; ?></div>

                                    <input id="submit" type="submit" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleButton = this;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Show';
            }
        });
    </script>
</body>

</html>