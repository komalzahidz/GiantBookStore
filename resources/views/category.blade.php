
@extends('master')

@section('title', 'Home')

@section('content')
<h2>Category</h2>
<div class="container">

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">
        @foreach ($category as $c)
        <div class="card" style="width: 18rem;">
           <img src="{{ Storage::url($c->image); }}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{ $c->title }}</h5>
             <h6 class="card-subtitle mb-2 text-muted">{{ $c->author }}</h6>
             <a href="{{ route('book detail', ['id' => $c->id]) }}" class="btn btn-primary">Details</a>
           </div>
         </div>
       @endforeach
    </div>

</div>
@endsection


<style>
    .dropdown {
    background-color: white;
    overflow: hidden;
    justify-content: center;
  }

  .dropdown a {
    float: left;
    display: block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .dropdown a:hover {
    background-color: #ddd;
    color: black;
  }

  .category-button:hover .category-content {display: block;}

  h2{
    color: white;
    background-color: grey;
  }
</style>
