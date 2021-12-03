<?php

require_once 'config.php';

/* Fill in this page to scrape the queryUrl for the broadcast list */
$month = $_GET["month-string"];
$queryUrl = "https://radio.focusonthefamily.ca/schedule/broadcasts/" . $month;


?>