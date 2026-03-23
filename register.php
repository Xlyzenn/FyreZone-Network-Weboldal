<?php
// Adatbázis csatlakozás
$conn = new mysqli("localhost", "root", "", "fyrezone_db");

// Ellenőrzés
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Adatok lekérése
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Jelszó hash-elése
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Ellenőrzés, hogy létezik-e már felhasználó
$sql_check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($sql_check);

if($result->num_rows > 0){
    echo "Ez a felhasználónév vagy email már létezik!";
} else {
    $sql = "INSERT INTO users (username, email, password_hash) VALUES ('$username', '$email', '$password_hash')";
    if($conn->query($sql) === TRUE){
        echo "Sikeres regisztráció! Most már be tudsz jelentkezni.";
    } else {
        echo "Hiba: " . $conn->error;
    }
}

$conn->close();
?>