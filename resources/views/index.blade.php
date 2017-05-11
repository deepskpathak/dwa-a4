@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron">
                    <div class="text-center">
                       <h2>Welcome to {{ config('app.name', 'Nownote') }}!</h2>
                        <img src="/img/notebook.png" alt="Nownote" class="img-responsive error-img center-block">
                        <hr>

                        @if (Auth::guest())
                            <a href="{{ url('/register') }}" class="btn-link">Sign up</a> to join Nownote, or <a href="{{ url('/login') }}" class="btn-link">Sign in</a> if you already have an account.
                        @else
                            <a href="{{ url('/home') }}" class="btn btn-success btn-lg">View your notes</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection