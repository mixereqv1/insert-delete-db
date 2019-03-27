<?php 

    $conn=new mysqli('127.0.0.1', 'root', '', 'test');
    $imie=$_POST['imie'];
    $dzial=$_POST['dzial'];
    $zarobki=$_POST['zarobki'];
    $data_urodzenia=$_POST['data_urodzenia'];
    $sql="INSERT INTO pracownicy VALUES(null, '$imie',$dzial,$zarobki,'$data_urodzenia')";
    mysqli_query($conn, $sql);
    header('location:index.php');

?>