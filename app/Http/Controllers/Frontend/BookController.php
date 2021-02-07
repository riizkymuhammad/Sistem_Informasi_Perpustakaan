<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BorrowHistory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $books = Book::paginate(10);
        return view('frontend.book.index',['books' =>$books,'title' =>'Beranda Perpustakaan']);
    }

    public function show(Book $book){

        return view('frontend.book.show',[
            'book' =>$book,
            'title' =>$book->title
            ]);
    }

    public function borrow(Book $book){

       $user = auth()->user();

       if($user->borrow()->isStillBorrow($book->id));
       {
           return redirect()->back()->with('toast','Kamu sudah meminjam buku dengan judul : '. $book->title);
       }
       $user->borrow()->attach($book);
       $book->decrement('qty');
        return redirect()->back()->with('toast', 'Berhasil meminjam buku');
    }
}
