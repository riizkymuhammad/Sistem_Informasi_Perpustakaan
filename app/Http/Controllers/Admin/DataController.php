<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

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

        $books = Book::orderBy('title','ASC');
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
}
