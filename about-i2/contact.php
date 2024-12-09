<?php
session_start();
$users_uid = $_SESSION['form_data']['user_name'] ?? '';
$users_email = $_SESSION['form_data']['email'] ?? '';
$text_area = $_SESSION['form_data']['text_area'] ?? '';
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors'], $_SESSION['form_data']);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #e7e6d5fd;">
    <div class="coustom-background d-flex flex-column justify-content-end text-center">
        <nav class="navbar bg-warning">
            <div class="container-fluid d-flex justify-content-start align-item-center">
                <a class="navbar-brand text-light" href="index.php">MI</a>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item">
                        <a class="na-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="navv-item">
                        <a class="nav-link text-light" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="max-width: 900px;">
            <div class="text-center m-5">
                <h3>Contact us</h3>
                <p>You can contact us at any time</p>
            </div>
            <div class="card mb-8 sm-4">
                <div class="row no gutters">
                    <div class="col">
                        <img src="images/contact.jpg" class="card-img h-100" alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Contact us</h5>
                            <form action="contact-submit.php" method="post">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input id="user_name" type="text" class="form-control" name="user_name" placeholder="Enter your name ..." value="<?php echo htmlspecialchars($users_uid); ?>"><br />
                                    <div class="text-danger"><?php echo $errors['user_name'] ?? ''; ?></div>

                                    <label for="email">Email</label>
                                    <input value="<?php echo htmlspecialchars($users_email); ?>" id="email" type="email" class="form-control" name="email" placeholder="Enter your email ..."><br />
                                    <div class="text-danger"><?php echo $errors['email'] ?? ''; ?></div>

                                    <label class="form-label">Type your message</label>
                                    <textarea name="text_area" class="form-control"><?php echo htmlspecialchars($text_area); ?></textarea>
                                    <div class="text-danger"><?php echo $errors['text_area'] ?? ''; ?></div>

                                    <br>
                                    <input type="checkbox" class="filled-in" name="choose" value="choose" id="choose">
                                    <label for="choose">I agree to the privacy policy</label><br />
                                    <div class="text-danger"><?php echo $errors['checkbox'] ?? ''; ?></div>
                                    <input id="submit" type="submit" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>