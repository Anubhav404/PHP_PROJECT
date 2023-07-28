<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'root';

    $database = 'trip';

    $con = mysqli_connect($server , $username , $password , $database);

    if(!$con){
        die("Connection to this database has been failed due to " . mysqli_connect_error());
    }
    echo "Success connecting to the DB ";

    $sql = "INSERT INTO `trip` (`sno`, `age`, `gender`, `email`, `name`, `number`, `dd`) VALUES ('1', '23', 'male', 'anubhavsoni32@gmail.com', 'Anubhav Soni', '9999992929', current_timestamp())";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>