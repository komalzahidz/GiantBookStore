
@extends('master')

@section('title', 'Home')

@section('content')
<h2>Book List</h2>
<div class="container">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">
        @foreach ($book as $b)
        <div class="card" style="width: 18rem;">
           <img src="{{ Storage::url($b->image); }}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{ $b->title }}</h5>
             <h6 class="card-subtitle mb-2 text-muted">{{ $b->author }}</h6>
             <a href="/book/{{ $b->id }}" class="btn btn-primary">Details</a>
           </div>
         </div>
       @endforeach

    </div>

</div>
@endsection
