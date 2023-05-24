<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Exception;

class BookController extends Controller
{
    public function index()
    {
        $model = new Book();
        try {
            $book_data = $model->fall();
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump('Terjadi Kesalahan: '. $message);
            exit;

        }
        return view('book/index',['book_data'=>$book_data]);

    }

   
    public function show($id, string $status)
    {
        $model = new Book();
        $book_data = $model->full();
        $search_book = $book_data[$id];
        return view('book/show', ['search_book' => $search_book, 'status'=> $status]);

    }

}
