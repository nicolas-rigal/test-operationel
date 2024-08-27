<?php
// Inclure le fichier autoload.php du dossier vendor
require 'vendor/autoload.php';
// Inclure la classe TestCase de PHPUnit
use PHPUnit\Framework\TestCase;
// Inclure le fichier contenant la fonction à tester
require_once 'index.php';

class AddTest extends TestCase
{
    // Test pour la fonction add()
    public function testAdd()
    {
        // Testez la fonction add()
        $result = add(5, 10);

        // Vérifiez que le résultat est correct
        $this->assertEquals(15, $result);
    }
}