<?php
    $server_name = "localhost";
    $server_user ="root";
    $server_password = "";
    $server_db = "userdata";

    $conn = new mysqli($server_name,$server_user,$server_password,$server_db);

    if($conn->connect_error)
    {
        die("Connection Not Established !");
    }
?>