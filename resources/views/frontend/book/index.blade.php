@extends('frontend.templates.default')

@section('content')

<div class="row">
 <h2>Koleksi Buku</h2>
 <blockquote>
 <p class="flow-text">Koleksi Buku yang bisa kamu bca dan pinjam!</p>
 </blockquote>
 <div class="row">
@foreach($books as $book )

@include('frontend.templates.components.card-book',['book' => $book])
 @endforeach
           
  </div>

  {{$books->links('vendor.pagination.materialize')}}


@endsection