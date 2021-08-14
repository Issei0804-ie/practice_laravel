<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;


/*
 * GET	/book	BookController@index	一覧画面の表示
GET	/book/{book}	BookController@show	詳細画面の表示
GET	/book/create	BookController@create	登録画面の表示
POST	/book	BookController@store	登録処理
GET	/book/{book}/edit	BookController@edit	編集画面の表示
PUT	/book/{book}	BookController@update	編集処理
DELETE	/book/{book}	BookController@destroy	削除処理
 */

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book/index', compact('books'));
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('book/edit', compact('book'));
    }

    public function update(BookRequest $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();

        return redirect("/book");
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect("/book");
    }

    public function create()
    {
        $book = new Book();
        return view('book/create', compact('book'));
    }

    public function store(BookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->author = $request->author;

        $book->save();

        return redirect("/book");

    }
}
