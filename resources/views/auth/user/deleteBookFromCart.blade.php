<?php

try {
    DB::table('shopping_carts')->where('user_id', $_POST['userid'])->where('BookID', $_POST['bookid'])->delete();
    echo 'success';
} catch (\Exception $e) {
    echo $e->getMessage();
}
