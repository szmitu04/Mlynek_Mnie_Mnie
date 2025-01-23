<?php
require 'dekstop/database.php';
require 'dekstop/Event.php';

header('Content-Type: application/json');

$startDate = $_GET['start'] ?? date('Y-m-01');
$endDate = $_GET['end'] ?? date('Y-m-t');

echo json_encode(Event::getEvents($startDate, $endDate));
?>
