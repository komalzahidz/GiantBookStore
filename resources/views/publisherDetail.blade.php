
@extends('master')

@section('title', 'Publisher')

@section('content')
<h2>Publisher Detail</h2>
<div class="container">

    @foreach ($publisherDetail as $pd)
    <img src="{{ Storage::url($pd->image) }}" alt="...">
    <h6>Name: {{ $pd->name }}</h6>
    <h6>Address: {{ $pd->address }}</h6>
    <h6>Phone: {{ $pd->phone }}</h6>
    <h6>Email: {{ $pd->email }}</h6>
    @endforeach
    @foreach ($publisherBook as $pb)
        <div class="card" style="width: 18rem;">
           <img src="{{ Storage::url($pb->image) }}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{ $pb->title }}</h5>
             <h6 class="card-subtitle mb-2 text-muted">{{ $pb->author }}</h6>
             <a href="{{ route('book detail', ['id' => $pb->id]) }}" class="btn btn-primary">Details</a>
           </div>
         </div>
    @endforeach
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


