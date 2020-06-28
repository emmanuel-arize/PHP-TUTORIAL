<?php
//Error Handling Tip: Use the libxml functionality to retrieve all XML errors when loading the document and then iterate over the errors. The following example tries to load a broken XML string:
libxml_use_internal_errors(true);
$myxml2="<?xml version='1.0' encoding='UTF-8'?>
<myclass>
<subject>Mathematics</subject>
<hours>two hours</hours>
<amount>$90.20</amount>
<teacher>Mr. Emmanuel Arize</teaching>
</myclass>";
$myxmll2=simplexml_load_string($myxml2);
if($myxmll2===false){
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($myxmll2);
}

?>