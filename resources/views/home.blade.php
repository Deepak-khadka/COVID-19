@extends('master.master')
@section('title')
      Home
    @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Access The Route</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <ul >
                            <li class="form-control"> <a href="forum">Forum</a></li>
                            <li class="form-control"><a href="question">List of Questions</a></li>
                            <li class="form-control"><a href="category">Category</a></li>
                        </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
