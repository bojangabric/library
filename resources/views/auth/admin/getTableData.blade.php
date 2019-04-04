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
  'user' => getenv('DB_USERNAME'),
  'pass' => getenv('DB_PASSWORD'),
  'db'   => getenv('DB_DATABASE'),
  'host' => getenv('DB_HOST')
);

echo json_encode(
  SSP::simple( $_GET, $sql_details, $table, $primaryKey, $cols )
);
