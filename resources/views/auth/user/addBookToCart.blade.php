<?php

$bookname = $_POST['bookname'];
$userid = $_POST['userid'];

try {
    $book = DB::table('books')->where('Name', $bookname)->first();
    DB::table('shopping_carts')->insert(
        ['user_id' => $userid, 'BookID' => $book->BookID]
    );
    echo 'success';
} catch (\Exception $e) {
    echo $e->getMessage();
}
