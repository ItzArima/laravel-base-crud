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
        <div class="title">
            <h1>Dashboard</h1>
        </div>
        <div class="table-container">
            <div class="admin-sections">
                <div class="comics">
                    <a href="{{route('admin.posts.index')}}">COMICS</a>
                </div>
                <div class="videos">
                    <a href="{{route('admin.videos.index')}}">VIDEOS</a>
                </div>
            </div>
            <div class="table">
                @if(isset($comicses))
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
                @elseif(isset($videos))
                    <div class="row">
                        <div class="id">
                            <h1>ID</h1>
                        </div>
                        <div class="title">
                            <h1>Title</h1>
                        </div>
                        <div class="owner">
                            <h1>Owner</h1>
                        </div>
                        <div class="duration">
                            <h1>Duration</h1>
                        </div>
                        <div class="actions">
                            <h1>Actions</h1>
                        </div>
                    </div>
                    @foreach($videos as $key => $video)
                        <div class="row">
                            <div class="id">
                                <p>{{$video->id}}</p>
                            </div>
                            <div class="title">
                                <p>{{$video->title}}</p>
                            </div>
                            <div class="owner">
                                <p>{{$video->owner}}</p>
                            </div>
                            <div class="duration">
                                <p>{{$video->duration}}</p>
                            </div>
                            <div class="actions">
                                <form action="{{route('admin.videos.show' , $video->id)}}" method="get">
                                    <input type="submit" value="View">
                                </form>
                                <form action="{{route('admin.videos.edit' , $video->id)}}">
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
                                    <form action="{{route('admin.videos.destroy' , $video->id)}}" method="post">
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
                @endif
            </div>
        </div>
        <div class="pagination">
        @if(isset($comicses))
            {{$comicses->links()}}
        @elseif(isset($videos))
            {{$videos->links()}}
        @endif
        </div>
        <div class="new">
        @if(isset($comicses))
            <a href="{{route('admin.posts.create')}}">Add A Comics</a>
        @elseif(isset($videos))
            <a href="{{route('admin.videos.create')}}">Add A Video</a>
        @endif
        </div>
    </main>
@endsection    

@section('script')
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