<?php
// Database connection details
$servername = "localhost";
$username = "dbuser";
$password = "userpass";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!<br>";

// Create a table if it doesn't exist
$table_query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($table_query) === TRUE) {
    echo "Table 'users' is ready.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Get the current highest user number
$select_query = "SELECT MAX(id) AS max_id FROM users";
$result = $conn->query($select_query);
$row = $result->fetch_assoc();
$next_user_number = $row['max_id'] + 1;

// Create the next test user
$new_username = "test_user" . $next_user_number;
$new_password = "test_password" . $next_user_number;

// Insert the new user
$insert_query = "INSERT INTO users (username, password) VALUES ('$new_username', '$new_password')";
if ($conn->query($insert_query) === TRUE) {
    echo "New user '$new_username' inserted successfully.<br>";
} else {
    echo "Error inserting user: " . $conn->error;
}

// Retrieve and display users from the database
$select_query = "SELECT id, username, password FROM users";
$result = $conn->query($select_query);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "No users found.";
}

// Close the connection
$conn->close();
?>

