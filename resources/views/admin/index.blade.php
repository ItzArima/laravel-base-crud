@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/adminIndex.css')}}">

@section('content')
    <main>
        @if(Session::has('success'))
            <div class="success">
                <p>{{Session::get('success')}}</p>
            </div>
        @endif
        <div class="table-container">
            <div class="title">
                <h1>Dashboard</h1>
            </div>
            <div class="table">
                <div class="row">
                    <div class="id">
                        <h1>ID</h1>
                    </div>
                    <div class="title">
                        <h1>Title</h1>
                    </div>
                    <div class="price">
                        <h1>Price</h1>
                    </div>
                    <div class="series">
                        <h1>Series</h1>
                    </div>
                    <div class="actions">
                        <h1>Actions</h1>
                    </div>
                </div>
                @foreach($comicses as $key => $comics)
                    <div class="row">
                        <div class="id">
                            <p>{{$comics->id}}</p>
                        </div>
                        <div class="title">
                            <p>{{$comics->title}}</p>
                        </div>
                        <div class="price">
                            <p>{{$comics->price}}</p>
                        </div>
                        <div class="series">
                            <p>{{$comics->series}}</p>
                        </div>
                        <div class="actions">
                            <form action="{{route('admin.posts.show' , $comics->id)}}" method="get">
                                <input type="submit" value="View">
                            </form>
                            <form action="{{route('admin.posts.edit' , $comics->id)}}">
                                <input type="submit" value="Edit">
                            </form>
                            <div class="delete" onclick="show({{$key}})">
                                <p>Delete</p>
                            </div>
                        </div>
                        <div class="delete-popup">
                            <div class="content">
                                <h1>Are you sure?</h1>
                                <p>After deletion data will be forever lost</p>
                                <form action="{{route('admin.posts.destroy' , $comics->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                                <div class="abort" onclick="abort({{$key}})">
                                    <p>X</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
            {{$comicses->links()}}
            </div>
            <div class="new">
                <a href="{{route('admin.posts.create')}}">Add A Comics</a>
            </div>
        </div>
    </main>

    <script>
        function show(index){
            let popup = document.getElementsByClassName('delete-popup');
            popup[index].classList.add('show')
            document.querySelector('body').classList.add('debright');
        }

        function abort(index){
            let popup = document.getElementsByClassName('delete-popup');
            popup[index].classList.remove('show')
            document.querySelector('body').classList.remove('debright');
        }

        let success = document.querySelector('.success');
        if(success != null){
            let displayTimeout = setTimeout(function disappear(){
                success.style.display = 'none';
            }, 3500)

            let opacityTimeout = setTimeout(function opacity(){
                success.classList.add('hide');
            }, 2000)
        }
    </script>
@endsection