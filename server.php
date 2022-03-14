<?php
    include __DIR__ . '/partials/database.php';

    $risposta = [
                'success' => true,
                'response' => $database];

    $oggettoJson = json_encode($risposta);
    
    header ('Content-Type: application/json');
    echo $oggettoJson;
    
?>
