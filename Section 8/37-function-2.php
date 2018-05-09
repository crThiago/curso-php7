<?php
$ts = strtotime("now");
$ts = strtotime("10 September 2000");
$ts = strtotime("+1 day");
$ts = strtotime("+1 week");
$ts = strtotime("+1 week 2 days 4 hours 2 seconds");
$ts = strtotime("next Thursday");
$ts = strtotime("last Monday");

echo date("l, d/m/Y", $ts);