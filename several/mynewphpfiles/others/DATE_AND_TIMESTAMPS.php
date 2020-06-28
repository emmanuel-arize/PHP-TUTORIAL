<?php
$time=time();
// date(format, timestamps
/*d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
F are full textual representation of the month
M A short textual representation of a month, three letters */
$today=getdate();
echo $today['month']." using getadte <br>";
$actual_time=date("H:i:s",$time) . "<br>";
echo "the actual time is ". $actual_time. "<br>";
$actual_date=date("D M Y",$time) . "<br>";
echo "the date is ". $actual_date. "<br>";
echo "Todays is ".date("d-M-Y @ H:i:s") . "<br>";
echo "Todays is ".date("l-m-Y @ H:i:sa") . "<br>";
echo "Todays is ".date("l-F-Y @ H:i:sA") . "<br>";
echo "Todays is ".date("l-F-Y @ H:i:sA") . "<br>";
echo "Todays date is ".date("Y-m-d");
echo "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
/*Get a Simple Time
Here are some characters that are commonly used for times:
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm) */

echo "the time is ".date("h:i:sa"). "<br>";
//The date() function formats a timestamp to a more readable date and time
/*
The mktime() function returns the Unix timestamp for a date. The Unix timestamp contains
 the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

mktime(hour,minute,second,month,day,year)*/
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";
echo time(). "<br>";


?>

&copy; 2018-<?php echo date("Y");?>
