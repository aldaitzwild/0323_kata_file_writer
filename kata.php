<?php
/**
 * Faire un programme qui écrit dans un fichier qui s'appelle "mantra.txt".
 * Il devra écrire dans ce fichier "Vive PHP !! " sur une ligne 10000 fois.
 */

 $handler = fopen('mantra.txt', 'w');

 for ($i=0; $i < 10000; $i++) { 
    fwrite($handler, 'Vive PHP !!' . PHP_EOL);
 }

 fclose($handler);