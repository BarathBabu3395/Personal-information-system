<!DOCTYPE html>
<html>
<head>
  <title>Personal Information System - Timetable</title>
</head>
<body>
  <h1>Personal Information System - Timetable</h1>
<?php
$a1=$_POST['a'];
$b1=$_POST['b'];
$c1=$_POST['c'];
$q1=$_POST['q'];
$d1=$_POST['d'];
$e1=$_POST['e'];
print"<table border=2>";
print"<tr><th>Name</th>";
print"<th>Event</th>";
print"<th>Date</th>";
print"<th>meeting</th>";
print"<th>schedule</th>";
print"<th>whom meeting with</th>";
print"<th>priority</th><tr>";
print"<tr><td>$a1</td>";
print"<td>$b1</td>";
print"<td>$c1</td>";
print"<td>$q1</td>";
print"<td>$d1</td>";
print"<td>$e1</td>";
echo"today date is".date("d/m/y");
$p=date("d");
switch($p)
{
 case 1:
 echo"<br>RUNNING EVENT";
 break;
 case 2:
 echo"<br>mini miltia";
 break;
 case 3:
 echo"<br>cricket";
 break;
 case 4:
 echo"<br>IPL";
 break;
 case 5:
 echo"<br>world cup";
 break;
 case 6:
 echo"<br>football match";
 break;
 case 7:
 echo"<br>chess";
 break;
 case 8:
 echo"<br>throwball";
 break;
 case 9:
 echo"<br>vollyball";
 break;
 case 10:
 echo"<br>conference";
 break;
 case 23:
 echo"<br>women world cup final";
 break;
 default:
 echo"<br>NO EVENT";
}
?>
</body>
</html>
