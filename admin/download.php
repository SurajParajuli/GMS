<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gms";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} if (isset($_POST['download'])) {
        // Call the downloadData() function to initiate the download
        downloadData();
    }

// Function to initiate the download
function downloadData() {
    global $conn;
    
    // Query to retrieve data from the "payment" table
    $sql = "SELECT id,name,plan,fprice,payment, (fprice - payment) as rem from membership";
    $result = $conn->query($sql);

    // File download headers
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="payment_data.csv"');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Write column headers to the CSV file
    $columnNames = array("ID", "Name", "Final Price", "Plan", "Payment", "Remaining");
    fputcsv($output, $columnNames);

    // Write data rows to the CSV file
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }

    // Close the output stream
    fclose($output);
}

// Close the database connection
$conn->close();
?>


