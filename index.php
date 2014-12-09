<?php
     $dom = new DOMDocument;
   
     if($dom->load("xmlfile.xml")) echo 'loading complete.';
         
    $produktkatalog = $dom->documentElement;
    
    $idForDelete = 'Kingston8';
        
    $ProduktGruppe = $produktkatalog->getElementsByTagName('ProduktGruppe')->item(0);
    
    //get all products
    $searchNodes = $produktkatalog->getElementsByTagName('Produkt');    
    foreach( $searchNodes as $searchNode )
    {
        $valueID = $searchNode->getAttribute('produsentId');    
        
        if($valueID == $idForDelete){
            $oldchapter = $ProduktGruppe->removeChild($searchNode);
        }
    }

    
    echo $dom->saveXML();
?>
