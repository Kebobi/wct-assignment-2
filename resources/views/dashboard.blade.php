@extends('layouts.app')

@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center mt-5">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="">
                                <h2 class="post-title">{{$post->title}}</h2>
                                <h3 class="post-subtitle">{{$post->desc}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">{{$post->user->username}}</a>
                                on {{$post->created_at}}
                            </p>
                            <div class="container row">
                                <div class="col-2 me-5">
                                    <form action="{{route('preview', $post)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Read</button>
                                    </form>
                                </div>
                                <div class="col-2 me-5">
                                    @if ($post->ownedBy(auth()->user()))
                                        <form action="{{route('edit', $post)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    @endif
                                </div>
                                <div class="col-2">
                                    @if ($post->ownedBy(auth()->user()))
                                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    </div>
                @endforeach
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"> {{ $posts->links() }}</div>
            @else
                There are no posts.
            @endif

        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection