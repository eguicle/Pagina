<?php
// Ruta de la carpeta donde están los archivos de Ciudadanía
$dir = __DIR__ . "/../ciudadania";   // carpeta 'ciudadania' al mismo nivel que 'api'
$baseUrl = "/ciudadania/";           // URL pública para acceder a los archivos

$files = [];

// Si la carpeta existe
if (is_dir($dir)) {
    // Recorremos todos los archivos de la carpeta
    foreach (scandir($dir) as $file) {
        if ($file !== "." && $file !== "..") {
            $files[] = [
                "name" => $file,
                "url" => $baseUrl . $file
            ];
        }
    }
}

// Devolvemos la respuesta como JSON
header('Content-Type: application/json; charset=utf-8');
echo json_encode($files);
