<?php


$current_datetime = date('Y-m-d H:i:s');
echo "The current date and time is: $current_datetime\n";


$current_year = date('Y');
echo "The current year is: $current_year\n";


$date_string = '2022-05-20';
$formatted_date = date('F j, Y', strtotime($date_string));
echo "The formatted date is: $formatted_date\n";

$start_date = '2022-01-01';
$days_to_add = 100;
$end_date = date('Y-m-d', strtotime("$start_date +$days_to_add days"));
echo "The end date is: $end_date\n";

?>

output

The current date and time is: 2023-02-24 07:43:50 
The current year is: 2023 The formatted date is: May 20, 2022 
The end date is: 2022-04-11 output