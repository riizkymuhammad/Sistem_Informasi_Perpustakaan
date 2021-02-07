<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\BorrowHistory;

class DataController extends Controller
{
    public function authors(){

        $authors = Author::latest();
        return datatables()->of($authors)
        ->addColumn('action', 'admin.author.action')
        ->addIndexColumn()
        ->toJson();
    }

    public function books(){

        $books = Book::with('author')->orderBy('title','ASC');
        return datatables()->of($books)
        ->addColumn('author', function(Book $model){
            return $model->author->name;
        })
        ->editColumn('cover', function(Book $model){
            return '<img src="'. $model->getCover() .'" height="150px"/>';

        })
        ->addColumn('action', 'admin.book.action')
        ->addIndexColumn()
        ->rawColumns(['cover','action'])
        ->toJson();
    }

    public function borrows(){
        $borrows = BorrowHistory::isBorrowed()->latest()->get();
        $borrows->load('user','book');
        return datatables()->of($borrows)
        ->addColumn('user', function(BorrowHistory $model){
            return $model->user->name;
        })
        ->addColumn('book_title', function(BorrowHistory $model){
            return $model->book->title;
        })
        ->addColumn('action', 'admin.borrow.action')
        ->addIndexColumn()
        ->toJson();
    }
}
