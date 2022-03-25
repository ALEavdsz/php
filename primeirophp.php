<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec";
 
$conn = new mysqli($servername, $username, $password, $dbname);   //aqui 
 
if ($conn->connect_error) {
  die("Falha na conexão " . $conn->connect_error);
}
 
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);  // aqui
 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["codigo"]. " - Nome: " . $row["nome"] . "<br>";
  }
} else {
  echo "Não encontrou resultado";
}
$conn->close();
?>