<?php
$string="this is a string";
// if there is a match it will print out 1 if mot zero
echo preg_match('/is/',$string);
echo "<br>";
if (preg_match('/is/',$string))
{
    echo "match found";
} else{
echo "no match";
}
echo "<br>";
// the \b in the pattern indicates a word boundary, so only the distinct
// word "web" is matched, and not a word partial like "webbing" or "cobweb"
if (preg_match ("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    print "A match was found.";
} else {
    print "A match was not found.";
}
echo "<br>";
if (preg_match ("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    print "A match was found.";
} else {
    print "A match was not found.";
}


echo "<br>";

// get host name from URL
preg_match("/^(http:\/\/)?([^\/]+)/i",
    "http://www.php.net/index.html", $matches);
$host = $matches[2];
// get last two segments of host name
preg_match("/[^\.\/]+\.[^\.\/]+$/",$host,$matches);
echo "domain name is: ".$matches[0]."\n";
?>