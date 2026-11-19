<?php

$devMode = true;

if ($devMode) {
    // Aktivera felrapportering
    error_reporting(-1);
    ini_set('display_errors', 1);
}

//Aktivera stöd för att inkludera klasser automatiskt
spl_autoload_register(function ($class_name) {
    require_once 'classes/' . $class_name . 'class.php';
});

if ($devMode) {
    // Lokal databasanslutning
} else {
    // Produktionsdatabasanslutning
}
