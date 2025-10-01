<?php
$error_code = isset($_GET['code']) ? $_GET['code'] : 500;

// Setzen des HTTP-Antwortcodes
http_response_code($error_code);

// Umleitung zur Fehlerseite mit Fehlercode
header("Location: /error/?code=$error_code");
exit;
?>
