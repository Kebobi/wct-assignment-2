@extends('layouts.app')

@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center mt-5">
            <form action="{{ route('post') }}" method="POST">
                @csrf
                <div class="form-group mb-3 mt-5">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="" required value="{{ $post->title }}">
                </div>
                <div class="form-group mb-3">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" name="desc" id="desc" placeholder="" required value="{{ $post->desc }}">
                  </div>
                <div class="form-group mb-3">
                  <label for="category">Category</label>
                  <select class="form-control" name="category" id="category" value="{{ $post->category }}" required>
                    <option>Biology</option>
                    <option>Technology</option>
                    <option>Social Science</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="body">Body</label>
                  <textarea class="form-control" name="body" id="body" rows="3" value="{{ $post->body }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Post</button>
            </form>
        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection