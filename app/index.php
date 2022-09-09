<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

include_once("./configs/env.php");
require_once("./configs/database.php");
include_once("./resources/views/home.php");