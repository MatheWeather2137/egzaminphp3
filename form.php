<?php
    $user="root";
    $pass="";
    $db="kalendarzphp";
    $host="localhost";
    $wpis=$_POST["wpis"];

    $conn = mysqli_connect($host, $user, $pass, $db);
    $sql = "UPDATE zadania SET wpis='$wpis' WHERE dataZadania='2020-07-13'";

    mysqli_query($conn, $sql);
?>