<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inserting data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goal = $_POST['goal'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $session_length = $_POST['session_length'];
    $calories_burnt = $_POST['calories_burnt'];
    $nutrition = $_POST['nutrition'];

    $sql = "INSERT INTO information (goal, description, duration, session_length, calories_burnt, nutrition)
            VALUES ('$goal', '$description', '$duration', '$session_length', '$calories_burnt', '$nutrition')";

    if ($conn->query($sql) === TRUE) {
        echo "Workout information inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
