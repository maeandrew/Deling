<?php
     $dom = new DOMDocument();
     if($dom ->load("xmlfile.xml")) echo 'loading complete.';
     
     
    //$foo = $dom->getElementsByTagName('Produktkatalog')->item(0);
    
    //$foo->attributes->name;
    //var_dump($foo)
    //;
     $fo = $dom->documentElement;
     
     $removeit = $fo->getElementsByTagName('Kode')->item(0);
     $old = $fo->removeChild($removeit);
     //$foo = $dom->getElementsByTagName('Kode')->item(0);
     //echo $foo->textContent;
     //$old = $dom->removeChild($foo);
     
    $dom->saveXML();
?>
