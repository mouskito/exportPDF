<?php
define("SERVER", "localhost");
define("LOGINSQL","root");
define("MDPSQL","root");

$sgbd = mysql_connect(SERVER,LOGINSQL,MDPSQL);
mysql_select_db("chat",$sgbd);