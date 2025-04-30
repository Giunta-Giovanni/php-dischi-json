<?php

// richiamiamo il file json con i records
$jsonText = file_get_contents('./records.json');


// convertiamolo in php
$records= json_decode($jsonText, true);

?>