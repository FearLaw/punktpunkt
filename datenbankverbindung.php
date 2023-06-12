<?php
// Verbindung zur MySQL-Datenbank
$mysqli = new mysqli('my_host', 'my_username', 'my_password', 'my_database_name');

if ($mysqli->connect_error) {
    die('Verbindungsfehler (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Daten, die extrahiert wurden
$data = [
    'uid' => '19_3492',
    'url' => '/person/3492',
    'name' => 'Anke Arndt',
    // etc. pp
    // 'strasse' => 'Neustrasse', // beispielsweise
    // 'plz' => '56457', // beispielsweise
];

// SQL-Query vorbereiten
$stmt = $mysqli->prepare("INSERT INTO my_table_name (uid, url, name) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $data['uid'], $data['url'], $data['name']);

// Query ausführen
if ($stmt->execute()) {
    echo "Eintrag erfolgreich hinzugefügt.";
} else {
    echo "Fehler: " . $stmt->error;
}

// Ressourcen freigeben
$stmt->close();
$mysqli->close();
?>

