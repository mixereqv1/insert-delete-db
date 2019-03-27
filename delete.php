<?php

    $conn = new mysqli('127.0.0.1','root','','test');
    $id = $_POST['id'];
    $sql = "DELETE FROM pracownicy WHERE id = $id";
    mysqli_query($conn,$sql);
    header('location:index.php');

?>