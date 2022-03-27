<?php
$servername = "localhost";
$username = "id18641398_university1";
$password = "TigIUWlNo0OB>SD";
$dbname = "id18641398_university";

$id = $_POST['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM Etudiant WHERE id= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Bien supprimer";
} else {
  echo "Error : " . $conn->error;
}

$conn->close();
?>
