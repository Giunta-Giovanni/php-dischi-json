<?php
require_once('./functions.php');

// richiamiamo il file json con i records
$jsonText = file_get_contents('./records.json');

// convertiamolo in php
$records= json_decode($jsonText, true);

// aggiungiamo il nuovo elemento

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $newRecord = [
        'title' => $_POST['title'],
        'artist' => $_POST['artist'],
        'cover_url' => $target_file,
        'year' => $_POST['year'],
        'genre' => $_POST['genre']
    ];

    $records[] = $newRecord;
        // convertiamolo in json 
    $jsonText= json_encode($records);

    // aggiorniamo il file records.json
    file_put_contents('records.json', $jsonText);

    // reindirizziamo l'utente alla index
    header('Location: ./index.php');
    }

?>