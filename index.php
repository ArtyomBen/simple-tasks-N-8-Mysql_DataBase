<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'lesson-7';

$conn = mysqli_connect ($server, $username, $password, $dbName);

if (!($conn)){
    die ('error: ' . mysqli_connect_error());
}else {
    'connected success';
}


//1.

 $sql = "SELECT Name FROM country WHERE Name LIKE 'A%A'";
 //or  //$sql = "SELECT Name FROM country WHERE Name LIKE '%A' AND NAME LIKE 'A%'";
$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc ($result)) {
        echo 'Name: ' . $row['Name'] . '<br>';
    }
}

//2.


?>
