@extends('frontend.templates.default')

@section('content')

<div class="row">
 <h2>Koleksi Buku</h2>
 <blockquote>
 <p class="flow-text">Koleksi Buku yang bisa kamu bca dan pinjam!</p>
 </blockquote>
 <div class="row">
@foreach($books as $book )

 <div class="col s12 m6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="{{$book->getCover()}}" height="200px" width="120px">
      </div>
      <div class="card-stacked">
        <div class="card-content">
        <h6><a href="{{route('book.show',$book->id)}}">{{Str::limit($book->title,15)}}</a></h6>
          <p>{{Str::limit($book->description,100)}}</p>
        </div>
        <div class="card-action">
        <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
        </div>
      </div>
    </div>
 </div>
 @endforeach
           
  </div>

  {{$books->links('vendor.pagination.materialize')}}


@endsection