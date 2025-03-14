<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "prvni_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *FROM zbozi";
        $result = $conn->query($sql);

        //if ($result->num_rows > 0) {
        // output data of each row
        //while($row = $result->fetch_assoc()) {
        //     echo "id: " . $row["ID"]. " - Name: " . $row["Název_produktu"]. " " . $row["Cena_za_kus"]. " " . $row["Počet_kusů"]. "<br>";
        //}
        //} else {
        //echo "0 results";
        //}
        //$conn->close();

        //echo "0 results";
        //}
        //$conn->close();
        
        if ($result->num_rows > 0) {
            echo "<table>
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Název produktu</th>
                            <th>Cena za kus</th>
                            <th>Počet kusů</th>
                        </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo  "<tr>".
                    "<td>". $row["ID"] . "</td>" .
                    "<td>". $row["Název_produktu"] . "</td>" .
                    "<td>". $row["Cena_za_kus"] . "</td>" .
                    "<td>". $row["Počet_kusů"] . "</td>" .
                "</tr>";
                        
        }
        } else {
        echo "0 results";
        }
        $conn->close();

    ?>

    <style>
        table{
            border: 1px solid black;
            th, td {
                border: 1px solid black ;
              
            }
        }
    </style>
</body>
</html>






