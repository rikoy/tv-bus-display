<?php
$dir = "./"; // Direktori tempat video disimpan
$videos = array_values(array_filter(scandir($dir), function ($file) {
    return strpos($file, ".mov") !== false; // Ambil hanya file MP4
}));

header("Content-Type: application/json");
echo json_encode($videos);
?>