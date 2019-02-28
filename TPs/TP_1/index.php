<?php
include "Mail.php";

$greatMail = new Mail("blabla", "blibli");
var_dump($greatMail->send());