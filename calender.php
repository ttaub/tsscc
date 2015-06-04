<?php
/*
This code has multiple CSS attributes:
calendar : the table itself
calendar-row : the rows of the table
calendar-heading : the first row containing the days of the week
calendar-blank : a blank day in the calendar
calendar-day : a numbered day in the calendar
*/
echo date("\T\o\d\a\y \i\s l jS \of F Y") . "<br>";
$month = date("n");
$year = date("Y");
$blank_days = date("w", mktime(0,0,0, $month, 1, $year));
$days_in_month = date("t", mktime(0,0,0, $month, 1, $year));
$day_number= 0;
$day_week = 1;
$headings = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "<center>" . date("F Y") . "</center>";
echo "<table class='calendar'>";
echo "<tr class='calendar-row'><td class='calendar-heading'>".implode("</td><td class='calender-heading'>", $headings)."</td></tr>";
echo "<tr class='calendar-row'>";
for($x = 0; $x < $blank_days; $x++){
	echo "<td class='calendar-blank'> </td>";
	$day_week++;
	for($day_table = 1; $day_table <= $days_in_month; $day_table++){
		echo "<td class='calendar-day'> $day_table </td>";
		if($blank_days == 6){
	 		echo "</tr>";
			if(($day_table + 1) != $days_in_month){
				echo "<tr class='calendar-row'>";}
			$blank_days = -1;
			$day_week = 0;}
		$day_week++; $blank_days++;}
	if($day_week < 8){
		for($x = 1; $x <= (8 - $day_week); $x++){
			echo "<td class='calendar-blank'> </td>";}}}
echo "</tr>";
echo "</table>";
?>
