@extends('layouts.app')

@section('title')
        Ask Question
    @endsection
@section('content')

         <div class="container">
                 <div class="col-md-9">
                     <form action="{{route('question.store')}}" method="post">
                         @csrf
                     <div class="form-group row">
                         <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title*') }}</label>

                         <div class="col-md-8">
                             <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autocomplete="current-title">

                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category*') }}</label>

                         <div class="col-md-8">
                             <select id="category" name="category" class="form-control ">
                                 <option value="" selected>--- SELECT ONE ---</option>
                                 @foreach($category as $category)
                                 <option value="{{$category->id}}" >{{$category->name}}</option>
                                     @endforeach
                             </select>

                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                         <div class="col-md-8">
                             <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body"  autocomplete="current-body">
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
