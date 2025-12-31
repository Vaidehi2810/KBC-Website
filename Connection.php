<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password,"questionsdata");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM your_table_name";  // Replace with your table name
$result = $conn->query($sql);

// Step 3: Check if there are rows and display them
if ($result->num_rows > 0) {
    // Loop through the rows and create a link for each
    while($row = $result->fetch_assoc()) {
        $rownum=1;
        switch($rownum)
        {
          case 1:
            $id = $row["id"];  // Assuming "id" is the unique identifier in your table
            echo "<a href='fp.php?id=$id'>View details of Row ID $id</a><br>";

        }
        
    }
} else {
    echo "0 results found";
}

// Close the connection
$conn->close();
?>