<?php

session_id('f744icg7gd5ubqcbmhntcr4n1f');

require_once '28-session-3.php';

session_regenerate_id();

echo session_id()." <br>";

var_dump($_SESSION);