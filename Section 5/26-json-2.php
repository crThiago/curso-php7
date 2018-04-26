<?php

$json = '[{"Nome":"Jo\u00e3o","idade":25},{"Nome":"Maria","idade":25}]';

// Formato de objeto
print_r(json_decode($json));
// Formato de arrays
print_r(json_decode($json, true));