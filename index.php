<?php
     $dom = new DOMDocument;
   
     if($dom->load("xmlfile.xml")) echo 'loading complete.';
         
    $produktkatalog = $dom->documentElement;
        
    $searchNodes = $produktkatalog->getElementsByTagName('Produsent');
    
    foreach( $searchNodes as $searchNode )
    {
        $valueID = $searchNode->getAttribute('id');
        var_dump($valueID);
    }

    $produkter = $produktkatalog->getElementsByTagName('Produkter')->item(0);
    $oldchapter = $produktkatalog->removeChild($produkter);

    echo $dom->saveXML();
?>

