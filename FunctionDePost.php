<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "qrcodegenerqtor";

// Cree la connection avec la bd
$conn = new mysqli($servername, $username, $password, $database);

// Verifie si la connection est bien etablie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verifie si la requete est de type POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere le chemin du QR Code
    $qrCodePath = $_POST["qrCodePath"];

    // Insert le chemin du QR Code dans la bd
    $sql = "INSERT INTO qrCodes (qrCodePath) VALUES ('$qrCodePath')";

    if ($conn->query($sql) === TRUE) {
        echo "QR Code path inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Ferme la connection avec la bd
$conn->close();
?>
