@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/adminCreate.css')}}">

@section('content')
    <main>
        <div class="form-container">
            <div class="title">
                <h1>Create a new Comic</h1>
            </div>
            <form action="{{route('admin.posts.store')}}" method="post">
                @csrf
                <input type="text" name="title" placeholder="Title" required>
                <textarea type="text" name="description" placeholder="Description" required></textarea>
                <input type="text" name="thumb" placeholder="Thumb Link" required>
                <input type="number" step="0.01" name="price" placeholder="Price" required>
                <input type="text" name="series" placeholder="series" required>
                <input type="date" name="sale_date" required>
                <input type="text" name="type" placeholder="Type" required>
                <button type="submit">Add</button>
            </form>
        </div>
    </main>
@endsection