<?php
     $dom = new DOMDocument();
     if($dom ->load("xmlfile.xml")) echo 'loading complete.';
     
     
    $foo = $dom->getElementById('Kingston')->textContent;
    var_dump($foo);
     
    $dom->saveXML();
?>