@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/adminCreate.css')}}">

@section('content')
    <main>
        <div class="form-container">
            <div class="title">
                <h1>Edit The Comic</h1>
            </div>
            <form action="{{route('admin.posts.update' , $comic->id)}}" method="post">
                @csrf
                @method('PUT')
                <input type="text" name="title" placeholder="Title" required value="{{$comic->title}}">
                <input type="text" name="thumb" placeholder="Thumb Link" required value="{{$comic->thumb}}">
                <input type="number" step="0.01" name="price" placeholder="Price" required value="{{$comic->price}}">
                <input type="text" name="series" placeholder="series" required value="{{$comic->series}}">
                <input type="date" name="sale_date" required value="{{$comic->sale_date}}">
                <input type="text" name="type" placeholder="Type" required value="{{$comic->type}}">
                <textarea type="text" name="description" placeholder="Description" required>{{$comic->description}}</textarea>
                <button type="submit">Update</button>
            </form>
        </div>
    </main>
@endsection      
@section('script')
    <script>
        let links = document.getElementsByClassName('hlink');
        links[2].classList.add('active')
    </script>
@endsection