

@extends('layouts.main')
@include('common.navigation')
@section('content')
<h1>Write a Review</h1>
@if (Auth::check('user'))

<form action="#" method="post">
    @csrf
    Book Title<input type="text" name="title"><br>
    Book Review<input type="text" title='review'><br>
    <button type="submit">Submit</button>
</form>

@endif

@if (Auth::check('admin'))

<form action="" method="post">
@csrf
@method('DELETE')
<button>Delete</button>
</form>

    
@endif
@endsection