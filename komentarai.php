<!DOCTYPE html>
<html>
<head>
  <title></title>



<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());
    }

    echo "sekmingai";
    mysqli_set_charset($conn,"utf8");



  ?>



</head>
<body>

</body>
</html>