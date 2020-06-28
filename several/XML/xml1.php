<?php
$myxml="<?xml version='1.0' encoding='UTF-8'?>
<myclass>
<subject>Mathematics</subject>
<hours>two hours</hours>
<amount>$90.20</amount>
<teacher>Mr. Emmanuel Arize</teacher>
</myclass>";
$mys=simplexml_load_string($myxml);
print_r($mys);
echo "<br>";
echo $mys;

$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>