<?php
function client_connecte (): bool {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function forcer_client_connecte ():void {
    if(!client_connecte()) {
      header('location: connexion.php');
      exit();
    }
}