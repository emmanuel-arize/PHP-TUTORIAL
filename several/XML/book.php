<?php
$xml =simplexml_load_file("BOOK.xml");

foreach($xml->book as $book){
    echo $book-> title . "<br>";
}


?>