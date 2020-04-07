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

                 </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-10">
                              <label for="body">{{$question->body}}</label>
                          </div>
                          <div class="col-2">
                              @if(auth()->user()->id  == $question->user_id)
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
                              @endif
                          </div>
                      </div>

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
{{--    this is reply section--}}
    <div class="container-fluid " style="margin-top: 10px">

            <div class="container"  >
                      <div class="row">
                          <div class="col-9 offset-1" >
                              @foreach($replies as $replies)
                                  <div style="height: 18px">
                                  </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                              <div class="col-10">
                                                  <h4>{{$replies->user->name}}
                                                      <span for="time" style="color: grey; font-size: 13px">comment {{$replies->created_at->diffForHumans()}}</span>
                                                  </h4>
                                              </div>
                                        <div class="col-2">

                                            <a onclick="getLikes()" class="btn btn-sm btn-primary">Like</a>

                                        </div>
                                    </div>

                                </div>

                                   <div class="card-body">
                                       {{$replies->body}}
                                   </div>
                                <div class="card-footer">

                                        @if(auth()->user()->id  == $replies->user_id)
                                    <a href="{{route('reply.edit',[$replies->id])}}"  class="btn btn-primary" data-toggle="modal" data-target="#myReplyEdit_{{$replies->id}}"> Edit</a>
                                        <a href="" class="btn btn-danger" onclick="
                          var ondelete=confirm('Do you want to delete the project ?');
                          if(ondelete){
                          event.preventDefault();
                          document.getElementById('delete_{{$replies->id}}').submit();
                          }
                          "> Delete</a>
                                        <form id="delete_{{$replies->id}}" class="" action="{{route('reply.destroy',[$replies->id])}}" method="post" >
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}

                                        </form>
                                        @endif

                                </div>

                            </div>

                                  {{--THis is for Reply Edit--}}
                                  <div class="modal fade" id="myReplyEdit_{{$replies->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabels">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h4 class="modal-title" id="myModalLabels">Edit Reply</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <form action="{{route('reply.update',[$replies->id])}}" method="post">
                                                      <input type="hidden" name="_method" value="PATCH">
                                                      @csrf
                                                      <div class="form-group row">
                                                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Reply *') }}</label>

                                                          <div class="col-md-8">
                                                              <input id="title" type="text" class="form-control " name="body"  autocomplete="current-title" value="{{$replies->body}}">
                                                              <input type="hidden" name="question_id" value="{{$question->id}}">
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
                        <h4 class="modal-title" id="myModalLabel">Edit Questions</h4>
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

<script>
    function getLikes() {
        $.ajax({
            type: 'get',
            url: '/getLikes',

            success: function (data) {

                $('#error').html(data.error);
            }
        });
    }
</script>
