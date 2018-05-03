<?php

require_once '28-session-3.php';

session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

session_destroy($_SESSION);