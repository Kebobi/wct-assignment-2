@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="ms-5 mt-2 text-danger h6">
            {{session('status')}}  
        </div>   
    @endif

    <!-- Main Content-->
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 mt-5">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                            <div class="ms-5 mt-2 text-danger h6">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        @error('password')
                            <div class="ms-5 mt-2 text-danger h6">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                  </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection