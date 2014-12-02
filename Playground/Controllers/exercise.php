<?php

ini_set("display_errors", 1);

include_once __DIR__ . '/../Include/_all.php';

$model = Exercise::Get();

$veiw = "exercise/index.php";
include __DIR__ . '/../Views/shared/template.php';
