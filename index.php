<?php 


// server settings
$servername = "localhost";
$username = "root";
$dbname = "survey";

// Create connection
$conn = new mysqli($servername, $username,  database: $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'connection succesfull';
}

$name = $_POST['name'];
$lastName = $_POST['lastname'];
$favColor = $_POST['favcolor'];

//add to database
$sql = "INSERT INTO survey (fname, fname, lname) VALUES ('$name', '$lastName', $favColor)";


//database addition confirmation
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Close connection
$conn->close();



    include 'template-parts/header.php'; 


    include 'template-parts/main.php'; 


    include 'template-parts/footer.php'; 
?>