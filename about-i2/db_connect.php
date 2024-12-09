<?php
//conect to database
$conn = mysqli_connect('localhost', 'root', '', 'ooplogin');

//check connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}
