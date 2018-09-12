<?php

$table = $_POST['table'];
$primaryKey = $_POST['id'];
$data = json_decode($_POST['data'], TRUE);

try {
    if ($table == 'users') {
      $data['password'] = Hash::make($data['password']);
      DB::table($table)->insert($data);
    } else {
      DB::table($table)->insert($data);
    }
    echo 'success';
} catch (\Exception $e) {
    echo $e->getMessage();
}


