<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    </head>

    <body>

        <main>

            <div class="left">

                <form method="POST" action="insert.php">

                    Imię: <br />
                    <input type="text" name="imie"> <br />
                    Dział: <br />
                    <input type="number" name="dzial"> <br />
                    Zarobki: <br />
                    <input type="number" name="zarobki"> <br />
                    Data urodzenia: <br />
                    <input type="date" name="data_urodzenia"> <br />
                    <input type="submit" value="Dodaj"> <br />

                </form>

            </div>

            <div class="right">

                <table>

                    <td>Imię</td>
                    <td>Nazwa działu</td>
                    <td>Zarobki</td>

                    <?php

                            $conn = new mysqli('127.0.0.1','root','','test');
                            $sql = "SELECT * FROM pracownicy, organizacja WHERE dzial=id_org ORDER BY id ASC";
                            $result = mysqli_query($conn,$sql);

                            while($row = mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>' .$row['imie']. '</td><td>' .$row['nazwa_dzial']. '</td><td>' .$row['zarobki']. "</td><td>
                                    <form method='POST' action='delete.php'>
                                    <input type='hidden' name='id' value=".$row['id'].">
                                    <input class='del_input' type='submit' value='-'>
                                    </form>
                                </td>");
                                echo('</tr>');
                            }

                        ?>

                </table>

            </div>

        </main>

    </body>

</html>