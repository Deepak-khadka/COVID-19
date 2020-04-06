@extends('master.master')

@section('title')
       Edit | {{$category->name}}
    @endsection

@section('content')

      <div class="container ">
           <div class="card">
               <div class="card-header">
                    Edit {{$category->name}}
               </div>
               <div class="card-body">
                   <label for="name">Name*</label>
                   <input class="form-control" type="text" name="name" id="name" value="{{$category->name}}" >
                   <div class="card-footer">
                       <input type="submit" value="Submit" class="btn btn-secondary">

                   </div>

               </div>
           </div>
      </div>

    @endsection
