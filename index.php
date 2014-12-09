<?php
     $dom = new DOMDocument();
     if($dom ->load("xmlfile.xml")) echo 'loading complete.';
     
     
    $foo = $dom->getElementsByTagName('Produsenter')->item(0);
    var_dump($foo);
     
    $dom->saveXML();
?>
