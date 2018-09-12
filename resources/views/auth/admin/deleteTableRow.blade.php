<?php

$table = $_POST['table'];
$primaryKey = $_POST['id'];
$data = json_decode($_POST['data'], TRUE);

if ($table == 'reviews') {
  try {
    DB::table($table)->where('user_id', $data['user_id'])->where('BookID', $data['BookID'])->delete();
    echo 'success';
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
} elseif ($table == 'shopping_carts') {
  try {
    DB::table($table)->where('user_id', $data['user_id'])->where('BookID', $data['BookID'])->delete();
    echo 'success';
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
} else {
  try {
    DB::table($table)->where($primaryKey, $data[$primaryKey])->delete();
    echo 'success';
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}


