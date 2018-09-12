<?php

$bookname = $_POST['bookname'];
$userid = $_POST['userid'];

try {
    $book = DB::table('books')->where('Name', $bookname)->first();
    DB::table('shopping_carts')->where('user_id', $userid)->where('BookID', $book->BookID)->delete();
    echo 'success';
} catch (\Exception $e) {
    echo $e->getMessage();
}
