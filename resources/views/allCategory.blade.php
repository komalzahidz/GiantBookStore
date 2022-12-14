@extends('master')

@section('title', 'Book Detail')

@section('content')
<h2>Category List</h2>
<div class="container">

    @foreach ($categories as $ac)
    <a href="{{ route('category', ['id' => $ac->id]) }}" class="btn btn-primary">{{ $ac->name }}</a><br><br>
    @endforeach

</div>
@endsection
