@extends('layouts.app')

@section('content')
    <br>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post-title}}</h1>
                        <h2 class="subheading">{{$post->desc}}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{$post->user->username}}</a>
                            on {{$post->created_at}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                        {{$post->body}}
                    </p>
                </div>
            </div>
        </div>
    </article>

    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection