<?php

try {
    DB::table('shopping_carts')->insert(
        ['user_id' => $_POST['userid'], 'BookID' => $_POST['bookid']]
    );
    echo 'success';
} catch (\Exception $e) {
    echo $e->getMessage();
}
