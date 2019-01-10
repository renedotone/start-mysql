
<?php
// Voorwaarde: PDO  (niet met MySQL of MySQLi) (want PDO is flexibel en van deze tijd)

// connectie maken met database server
$conn = new PDO("mysql:host=localhost;dbname=project2", "root", "");

// stuur SQL QUERY naar database server
$stmt = $conn->query("SELECT * FROM skiareas");

// antwoord van de database server opvragen
// door het antwoord lopen, 
while ($row = $stmt->fetch()) { 

    // en het weergeven als pagina gebruiker als HTML
    echo "<li>" . $row["areas"] . " in " . $row["country"] . "</li>";
}

// verbreek de verbinding met de database server
$conn = NULL;
?>  

