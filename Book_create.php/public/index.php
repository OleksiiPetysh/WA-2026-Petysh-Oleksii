<?php

// pro ucely vyuky a ladeni na lokalnim serveru 
// je vhodne zapnout kompletni zobrazovani chyb 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// nacteni tridy routeru ktera se postara o sprocovani URL
require_once '../core/App.php';

// inicializace aplikace a spusteni procesu routovani
$app = new App();