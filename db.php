
<?php
$servername = " ";
$username = " "; 
$password = " ";      
$dbname = " ";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Aconteceu uma falha aqui incel:  " . $conn->connect_error);
}
?>