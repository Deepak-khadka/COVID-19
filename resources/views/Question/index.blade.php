 @extends('master.master')
 @section('title')
     List of Questions
     @endsection
 @section('content')
<div class="container">
    <a href="{{route('question.create')}}" class="btn btn-secondary">Ask Question</a>

     <div class="row" style="margin-top: 10px">

<div class="col-md-8">


     @foreach($question as $q)
     <div class="card">
          <div class="card-header">
                 <h4><a href="/question/{{$q->slug}}">  {{$q->title}}</a></h4>
                 <span style="color: grey">{{$q->created_at->diffForHumans()}}</span>
          </div>
         <div class="card-body">
             <label for="body">{{$q->body}}</label>

         </div>

     </div>
        <div style="height: 18px">
        </div>
         @endforeach
</div>

          <div class="col-4">
              <div>
                   <span class="form-control badge-primary">Category</span>
              </div>

              <table class="table table-hover">
                  @foreach($category as $category)
                  <tr>
                      <td> {{$category->name}}</td>
                  </tr>
                  @endforeach
              </table>




          </div>
</div>

</div>
     @endsection
