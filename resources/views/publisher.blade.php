
@extends('master')

@section('title', 'Publisher')

@section('content')
<h2>Publishers</h2>
<div class="container">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">
        @foreach ($publishers as $p)
        <div class="card" style="width: 18rem;">
           <img src="{{ Storage::url($p->image) }}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{ $p->name }}</h5>
             <h6 class="card-subtitle mb-2 text-muted">{{ $p->address }}</h6>
             <a href="{{ route('publisher detail', ['id' => $p->id]) }}" class="btn btn-primary">Details</a>
           </div>
         </div>
       @endforeach
    </div>
</div>
@endsection
