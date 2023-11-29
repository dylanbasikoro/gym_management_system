<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch workout plan data from the database
$sql = "SELECT * FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='goal-card'>";
        echo "<h2>" . $row['plan_name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Duration: " . $row['duration'] . "</p>";
        echo "<p>Session Length: " . $row['session_length'] . "</p>";
        echo "<p>Calories Burnt: " . $row['calories_burnt'] . " per session</p>";
        echo "<p>Nutrition: " . $row['nutrition'] . "</p>";
        echo "<a href='progress.html' class='button'>Select Plan</a>";
        echo "</div>";
    }
} else {
    echo "No workout plan data found.";
}

$conn->close();
?>