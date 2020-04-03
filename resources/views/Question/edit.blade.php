@extends('layouts.app')

@section('title')
      {{$question->slug}}
    @endsection


@section('content')
    <div class="container">
        <div class="col-md-9">
            <form action="{{route('question.update',[$question->slug])}}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title*') }}</label>

                    <div class="col-md-8">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autocomplete="current-title" value="{{$question->title}}">

                        @error('title')
                        <span class="invalid-feedback" role="alert">

                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category*') }}</label>

                    <div class="col-md-8">
                        <select id="category" name="category" class="form-control ">
                            <option value="" selected>--- SELECT ONE ---</option>
                            @foreach($category as $category)
                                <option value="{{$category->id}}" {{$category->id == $question->category_id ? "selected" : ""}} >{{$category->name}}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                    <div class="col-md-8">
                             <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" required autocomplete="current-body">
                             {{$question->body}}
                             </textarea>


                    </div>
                </div>

                <div class="col-md-8 offset-4">
                    <input class="btn btn-primary" type="submit" value="Submit">

                </div>
            </form>
        </div>
    </div>
    @endsection
