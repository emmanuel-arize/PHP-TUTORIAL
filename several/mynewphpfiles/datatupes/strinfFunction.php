<?php
// If you want to check out the type and value of a certain expression, use var_dump().
var_dump(substr_replace("Boo", "0", 1, 1)); // string(3) "B0o"
var_dump(substr_Replace("Boo", "ts", strlen("Boo"))); // string(5) "Boots"
echo "<br>";
$stting='I can be any case';
$lower=strtolower($stting);
echo "this is a lower case ".$lower;
echo "<br>";
$upper=strtoupper($stting);
echo "this is upper case  ".$upper;
echo "<br>";

/*The PHP strpos() function searches for a specific text within a string.
If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.*/
echo strpos('hello there','there');
echo '<br>';

//The PHP str_replace() function replaces some characters with some other characters in a string.
//The example below replaces the text "world" with "Dolly":
echo str_replace('world','dolly','hello world');
echo '<br>';
//The complex (curly) syntax format provides another option which requires that you wrap your variable within
//curly braces {}.

$name='emma';

echo  "<p>hello {$name} </p>";
echo '<br>';

$foo = 'Hello world';
echo '<br>';
echo $foo[6]; // returns 'w'
echo '<br>';
echo $foo{6}; // also returns 'w'
echo '<br>';
echo substr($foo, 6, 1); // also returns 'w'
echo '<br>';
echo substr($foo, 6, 2); // returns 'wo'
echo '<br>';
echo substr($foo, 6, 3); // returns 'wor'
echo '<br>';
echo str_replace('world','WORLD',$foo);
echo '<br>';
echo substr_replace($foo,'WHO',6,2);


?>

