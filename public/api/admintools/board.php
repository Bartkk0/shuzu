<?php
require_once("../../../include/phpheader.php");
require_once("./verify.php");

print("Executing action: <b>" . $_POST["type"] . "</b><br><br>");
require_once("./board_actions/" . $_POST["type"] . ".php");