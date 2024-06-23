<?php
function displayTableContents() {

    $dsn = "mysql:host=localhost;dbname=facture";
    $username = "root";
    $password = "myPassword";

    $directory = 'facture/';

    function download($name) {

        $directory = './facture/';
        
        // Nom du fichier 
        $filename = $name
        
        $filepath = $directory . $filename;
        
        // exist ?
        if(file_exists($filepath) && is_file($filepath)) {
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));


        readfile($filepath);
        exit;
        } else {

            echo "Le fichier demandé n'existe pas.";
        }
    }
try {
        $conn = new PDO($dsn, $username, $password);

        // error mode Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       // Request
        $sql = "SELECT * FROM gt2i_facturedafi";
        $stmt = $conn->query($sql);

        $today = date('Y-m-d');
        $time = date('h:i:s A');

        if ($stmt->rowCount() > 0) {
            // Diplay data
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "Nom: " . $row["ADRESSEP_RSNOM"]. " - Prenom: " . $row["ADRESSEP_PRENOM"]. " - Montant: " . $row["CDECENT_MTTCDE"]. " €" . "- N° Facture: " .  $row["CDECENT_NOFAC"] . " - Date: " . $row["CDECENT_DTECDE"] . " - Email: " . $row["ADRESSEP_EMAIL"] . "\n";
                
                
                if ($time === "11:59:59") {
                    foreach($row['CDECENT_DTECDE'] === $today) {
                        mail(
                            $row["ADRESSEP_EMAIL"],
                            "Facture N°" . $row["CDECENT_NOFAC"],
                            download();
                        )
                    }
                }
              
              
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
