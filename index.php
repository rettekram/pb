<?php

// Generates directory index
$path = './';
$dir = new DirectoryIterator($path);
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
        echo '<a href="'.$fileinfo.'">'.$fileinfo->getFilename().'</a><br>';
    }
}