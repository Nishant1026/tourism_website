<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourist";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Connection Failed" . mysqli_connect_error());
}
else
{
    echo("Connection Successfully");
}


$sql = "CREATE TABLE user(
    id INT(5) UNSIGNED AUTO_INCREAMENT PRIMARY KEY, 
    user_name VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    user_pass VARCHAR(20) NOT NULL,
    confirm_pass VARCHAR(20) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($conn, $sql))
{
    echo "Table Created";
}
else{
    echo "Table not Created" ;
}
?>