<?php

$outputFile = 'test-results.html';

// Exécuter PHPUnit et capturer la sortie
$command = 'vendor/bin/phpunit --log-html php://stdout';
$output = shell_exec($command);

// Ajouter la sortie au fichier HTML
file_put_contents($outputFile, $output, FILE_APPEND);

echo "Results have been appended to $outputFile";
