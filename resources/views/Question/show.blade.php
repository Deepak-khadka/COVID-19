@extends('master.master')

@section('title')
     {{$question->slug}}
    @endsection
@section('content')

    <div class="container">
        <div class="row">

         <div class="col-10">
              <div class="card">
                 <div class="card-header">
                    <h3>{{$question->title}}</h3>
                     <span style="color: grey">{{$question->user->name}} said {{$question->created_at->diffForHumans()}}</span>

                 </div>
                  <div class="card-body">
                      <label for="body">{{$question->body}}</label>
                  </div>

                         <div class="card-footer">
                      <a href="{{route('question.edit',[$question->slug])}}" class="btn btn-primary">Edit</a>
                      <a href="" class="btn btn-danger" onclick="
                          var ondelete=confirm('Do you want to delete the project ?');
                          if(ondelete){
                          event.preventDefault();
                          document.getElementById('delete').submit();
                          }
                          "> Delete</a>
                          <form id="delete" class="" action="{{route('question.destroy',[$question->slug])}}" method="post" >
                              <input type="hidden" name="_method" value="DELETE">
                              {{csrf_field()}}

                          </form>


                  </div>

              </div>
         </div>
        <div class="col-2">
            <a href="" class="btn btn-success">5 replies </a>
        </div>
    </div>

    </div>

    @endsection


