<?php
// Establish a database connection (Replace with your credentials)
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'students';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve the sorting order from the AJAX request
if (isset($_POST['sortingOrder'])) {
    $sortingOrder = $_POST['sortingOrder'];

    // Validate the sorting order (must be 'asc' or 'desc')
    if ($sortingOrder === 'asc' || $sortingOrder === 'desc') {
        // Prepare the SQL query
        $sql = "SELECT * FROM student_records ORDER BY name $sortingOrder";

        // Execute the query
        $result = $conn->query($sql);

        // Check if any results were found
        if ($result->num_rows > 0) {
            echo '<ul>';
            while ($row = $result->fetch_assoc()) {
                echo '<li>' . $row['name'] . ' (Age: ' . $row['age'] . ', Email: ' . $row['email'] . ')</li>';
            }
            echo '</ul>';
        } else {
            echo 'No records found.';
        }
    } else {
        echo 'Invalid sorting order.';
    }
}

// Close the database connection
$conn->close();
?>
