<?php
function displayTableContents() {

    $dsn = "mysql:host=localhost;dbname=facture";
    $username = "root";
    $password = "Ardkordu.30";
    try {
        $conn = new PDO($dsn, $username, $password);

        // error mode Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       // Request
        $sql = "SELECT * FROM gt2i_facturedafi";
        $stmt = $conn->query($sql);

        if ($stmt->rowCount() > 0) {
            // Diplay data
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "Nom: " . $row["ADRESSEP_RSNOM"]. " - Prenom: " . $row["ADRESSEP_PRENOM"]. " - Montant: " . $row["CDECENT_MTTCDE"]. " €" . "- N° Facture: " .  $row["CDECENT_NOFAC"] . "\n";
                // CDECENT_DTECDE : DATE
                // ADRESSEP_EMAIL
                
            }
        } else {
            echo "0 résultats";
        }
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $conn = null;
}

displayTableContents();
