<?php
    $conn = mysqli_connect('localhost', 'admin', '1234', 'bakery_project');

    if(!$conn){
        echo 'connection error'. mysqli_connect_error();
    }
?>