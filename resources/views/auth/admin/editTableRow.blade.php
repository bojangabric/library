<?php

$table = $_POST['table'];
$primaryKey = $_POST['id'];
$secondKey = $_POST['secid'];
$data = json_decode($_POST['data'], TRUE);

if ($table == 'reviews') {
  try {
    $dataPrimKeyValue = $data[$primaryKey];
    $dataSecondKeyValue = $data[$secondKey];
    array_shift($data);
    array_shift($data);
    DB::table($table)->where($primaryKey, $dataPrimKeyValue)->where($secondKey, $dataSecondKeyValue)->update($data);
    echo 'success';
  } catch (Exception $e) {
    echo $e->getMessage();
  }
} elseif ($table == 'users') {
  try {
    $dataPrimKeyValue = $data[$primaryKey];
    $data['password'] = Hash::make($data['password']);
    array_shift($data);
    DB::table($table)->where($primaryKey, $dataPrimKeyValue)->update($data);
    echo 'success';
  } catch (Exception $e) {
    echo $e->getMessage();
  }
} else {
  try {
    $dataPrimKeyValue = $data[$primaryKey];
    array_shift($data);
    DB::table($table)->where($primaryKey, $dataPrimKeyValue)->update($data);
    echo 'success';
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}


