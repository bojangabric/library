<?php

use App\Classes\SSP;

$table = $_POST['table'];
$primaryKey = $_POST['id'];
$columns = $_POST['columns'];

$cols = [];
$i = 0;
foreach ($columns as $col) {
  $cols[] = array( 'db' => $col, 'dt' => $i);
  $i++;
}
 
$sql_details = array(
  'user' => 'homestead',
  'pass' => 'secret',
  'db'   => 'homestead',
  'host' => '192.168.1.33'
);

echo json_encode(
  SSP::simple( $_GET, $sql_details, $table, $primaryKey, $cols )
);
