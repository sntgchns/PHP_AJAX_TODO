<?php

$connection = mysqli_connect(
  'localhost', 'root', 'O[sga]ANI77INA', 'tasks-database'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
