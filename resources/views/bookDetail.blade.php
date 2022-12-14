@extends('master')

@section('title', 'Book Detail')

@section('content')
<h2>Book Detail</h2>
<div class="container">

    @foreach ($bookDetail as $bd)
    <img src="{{ Storage::url($bd->image) }}" alt="...">
    <h6>Title: {{ $bd->title }}</h6>
    <h6>Author: {{ $bd->author }}</h6>
    <h6>Year: {{ $bd->year }}</h6>
    <h6>Synopsis:</h6>
    <p>{{ $bd->synopsis }}</p>
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
