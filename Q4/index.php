<?php
$directory = 'T:\xampp\htdocs\rutvi\Q5';

if (is_dir($directory)) {
    $files = scandir($directory);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory not found.";
}
?>
