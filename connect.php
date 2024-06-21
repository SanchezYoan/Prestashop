<?php

$servername = "localhost";
$username = "root";
$password = "Ardkordu.30";
$dbname = "facture";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

$sql = "SELECT * FROM gt2i_facturedafi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["ADRESSEP_RSNOM"]. " - Prenom: " . $row["ADRESSEP_PRENOM"]. " - Montant: " . $row["CDECENT_MTTCDE"]. "<br>";
    }
} else {
    echo "0 résultats";
}

$conn->close();
?>
