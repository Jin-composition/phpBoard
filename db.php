<?php

header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

$db = new mysqli('172.30.1.200', 'root', 'Whgdmstodrkr@&098', 'TEST3');
$db->set_charset('utf8');

function mq($sql)
{
  global $db;
  return $db->query($sql);
}
?>
