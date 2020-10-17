<!-- WAP to ASCII VALUE  -->
 <?php
   //ASCII values of character
 
    
 for ($i=0; $i < 255; $i++) { 
    echo chr($i) . " - ";
    echo mb_convert_encoding('&#' . intval($i) . ';', 'UTF-8', 'HTML-ENTITIES')." - ";
 }
?>

