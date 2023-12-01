<?php
$pdo = new PDO('mysql:host=localhost;dbname=gms', 'root', '');
$query = "SELECT *FROM files WHERE filename = :filename";
$statement = $pdo->prepare($query);
$statement->bindParam(':filename', $_GET['filename']);
$statement->execute();

if ($statement->rowCount() > 0) {
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $filename = $row['filename'];
    $fileData = $row['file_data'];

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    echo $fileData;
} else {
    echo 'File not found in the database.';
}
?>
