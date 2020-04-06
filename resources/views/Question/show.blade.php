@extends('master.master')

@section('title')
     {{$question->slug}}
    @endsection
@section('content')

    <div class="container">
        <div class="row">

         <div class="col-11">
              <div class="card">
                 <div class="card-header">
                    <h3>{{$question->title}}</h3>
                     <span style="color: grey">{{$question->user->name}} said {{$question->created_at->diffForHumans()}}</span>
                     <div style="margin-left: 840px">
                         <a href="{{route('question.edit',[$question->slug])}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit</a>
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
                  <div class="card-body">
                      <label for="body">{{$question->body}}</label>
                  </div>


                   <div>

                   </div>
              </div>

         </div>
        <div class="col-1">
            <a href="" class="btn btn-success">{{$count}} Replies </a>
        </div>
    </div>
        <div class="card-footer">
            <h3>Comment</h3>
            <form action="{{route('reply.store')}}" method="post">
                @csrf
                <input type="text" name="body" class="form-control" placeholder="Reply by {{auth()->user()->name}}">
                <input type="hidden" name="question_id" value="{{$question->id}}">
                <input type="submit" value="Submit" class="btn btn-group-sm">
            </form>




        </div>

    </div>
    <div class="container-fluid " style="margin-top: 10px">

            <div class="container"  >
                      <div class="row">
                          <div class="col-9 offset-1" >
                              @foreach($replies as $replies)
                                  <div style="height: 18px">
                                  </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{$replies->user->name}}
                                        <span for="time" style="color: grey; font-size: 13px">comment {{$replies->created_at->diffForHumans()}}</span>
                                    </h4>
                                </div>

                                   <div class="card-body">
                                       {{$replies->body}}
                                   </div>
                                <div class="card-footer">
                                    <a href="{{route('reply.edit',[$replies->id])}}" class="btn btn-primary"> Edit</a>
                                    <a href="">Delete</a>
                                </div>

                            </div>


                              @endforeach
                      </div>
                      </div>
            </div>

    </div>
    @endsection


{{--this is the question edit--}}

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                    </div>
                    <div class="modal-body">
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
            </div>
            <div class="card-body">
                <label for="body">{{$question->body}}</label>
            </div>

        </div>

