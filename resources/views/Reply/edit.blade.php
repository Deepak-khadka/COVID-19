@extends('master.master')

       @section('title')
             Edit | {{$reply->id}}
           @endsection

@section('content')

    <div class="container-fluid">
        <form action="{{route('reply.update',[$reply->id])}}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
            <input type="text">
        </form>
    </div>

    @endsection
