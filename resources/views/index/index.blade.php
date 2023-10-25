{{-- @include('components.boiler-plate') --}}

@extends('layouts.main')
@include('common.navigation')
@section('content')
    <h1>Book Corner</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo explicabo atque repudiandae aut, fugiat recusandae cupiditate, corrupti reprehenderit provident a libero totam? Dignissimos perspiciatis, laudantium accusantium cum quisquam inventore tempore!</p>

@foreach ($crime_books as $book)
    <div class="book">
        <h3>{{$book->title}}</h3>
        <p>{{$book->price}}</p>
        <p>{{$book->authors->pluck('name')->implode(', ')}}</p>
    </div>
@endforeach

</body>
</html>
@endsection