<?php
include('db_connect.php');

// write query 
$sql = 'SELECT users_id, text_area , users_uid ,users_email FROM users';


//make query and get result 
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
//"we dont have to do this" free result from memory
mysqli_free_result($result);
// close connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me2</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .coustom-background {

            background-image: url(images/ggreen1.jfif);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }
    </style>


</head>

<body style="background-color: #e7e6d5fd;">
    <div class="coustom-background d-flex flex-column justify-content-end text-center ">
        <!-- navbar -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-start align-item-center">
                <a class="navbar-brand text-warning" href="#">MI</a>

                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>



        <!-- the left side, its size and what inside it-->
        <div class="container m-6">
            <div class="row">
                <div class="col-lg-9">

                    <br><br>
                    <h1 id=mytitle class="display-2 text-light">RAWAN ALBAQAMI</h1>
                    <p class="lead text-warning"> This page is about me</p>

                    <hr class="my-4 bg-warning">
                    <br><br>
                </div>
            </div>
        </div>
    </div>











    <!-- the main text -->
    <div class="hpp" class="text-center">

        <br><br> <br>
        <h2 class="text-warning text-center">About me</h2>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <p id="show-more" class="text-light-emphasis"> a recent graduate in Programming from Imam Mohammed Ibn
                    Saud Islamic University.
                    Additionally, I hold a diploma in Marketing from the General Organization for <br> <br> Technical
                    and Vocational
                    <br> I have strong skills in programming languages such as Java, JavaScript, PHP, HTML, CSS, SQL,
                    and .
                    Furthermore, <br> I possess diverse marketing skills including digital marketing, customer and
                    competitor
                    analysis,
                </p>
            </div>
            <button id="show" class="btn btn-warning">SHOW</button>

        </div>
    </div>




    <div class="text-center p-4">
        <br><br> <br>
        <h2 class="text-warning" style="margin-top: 80px; margin-bottom: 100px;text-align: center;">Educational
            Background</h2>
        <p id=pargh style="margin-top: 80px; margin-bottom: 100px;text-align: center;">
            I hold a Diploma in Programming
            Technology from Imam Mohaammed Ibn Saud
            Islamic University, where I developed strong skills <br> in software development and designing technical
            solutions. Additionally,<br> I completed a Diploma in Marketing from the Technical and Vocational Trining
            Corporation College,<br> which equipped me with a comprehensive understanding of marketing strategies and
            tools. </p>
    </div>


    <div class="text-center">
        <h1 class="text-seccondary"> Projects </h1>
        <p class="lead">
            I have been involved in several key projects that highlight my skills and expertise. One of them
            was my graduation project:
        </p>

        <h5 class="text-warning" style=" margin-top:80px; margin-bottom:100px; text-align:center;">
            Easy Pick – A Program to Pick Up Children:
        </h5>

        <br><br>
        <p>
            As schools grow and the number of students increases, overcrowding at the exits becomes a
            significant issue. <br> Easy Pick aims to solve this problem by offering a simple-to-use app
            with a user-friendly interface. With just a click of a button, <br> parents can notify the
            school of their arrival, prompting the administrator to call out their child’s name via the
            intercom.
        </p>

        <div class="flex-container">
            <img src="images/es1.jpg" alt="Image 1">
            <img src="images/es.jpg" alt="Image 2">
        </div>
    </div>
    <!-- the main text -->




    <!-- slide -->
    <div class="container">

        <!-- text -->
        <div class="text-center">
            <h5 class="text-warning" style=" margin-top: 180px;margin-bottom: 100px; text-align: center;">
                HOME OF BEAUTY - nail bar & spa website: </h5>

            <p style=" margin-top: 80px;  margin-bottom: 80px;text-align: center;">
                “It is a comprehensive salon website that allows you to create a personal account, book services, and
                view the prices for each service. The site includes categories for hair services, nail services,
                and skin services. Each service is organized into its own section, making it easy to access the
                information you need and plan your visits according to your personal needs
            </p>
        </div>

        <!-- slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style=border-radius:10px; src="images/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style=border-radius:10px; src="images/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style=border-radius:10px; src="images/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>
    </div>



    <br>
    <hr>




    <!-- footer -->

    <footer class="text-center">

        <div class="container p-4 pb-0">
            <!--  Social  -->
            <section class="mb-4">
                <!-- whatsapp -->
                <a data-mdb-ripple-init id=test class="btn p-0 m-1" style="background-color: #26bb3a;"
                    href="https://iwtsp.com/966567400212" role="button">
                    <img src="images/whats.png" alt="WhatsApp logo" style=width:30px; height:30px ;>
                </a>


                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn p-0 m-1" style="background-color: #04669b;"
                    href="https://www.linkedin.com/in/rawan-albaqami-740538224/" role="button">
                    <img src="images/link.png" alt="linkedin logo" style="width:30px; height:30px ;">
                </a>


            </section>

        </div>


        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #eef122a9;">
            © 2024 Copyright
        </div>

    </footer>
    </div>


    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>