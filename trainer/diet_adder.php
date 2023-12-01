<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
   
    $filename = $file['name'];
    $tmpFilePath = $file['tmp_name'];

    $fileData = file_get_contents($tmpFilePath);

    $pdo = new PDO('mysql:host=localhost;dbname=gms', 'root', '');
    $query = "INSERT INTO `diet`(`id`, `filename`, `file_data`) VALUES ($_POST[id],?, ?)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(1, $filename);
    $statement->bindParam(2, $fileData, PDO::PARAM_LOB);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        echo 'File added to the database successfully.';
    } else {
        echo 'Failed to add the file to the database.';
    }
}
header("Location: diet.php");

?>
