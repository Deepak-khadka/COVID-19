@extends('master.master')
@section('title')

    {{$category->slug}}

    @endsection

@section('content')

 <div class="container-fluid">
     <div class="row">
         <div class="col-9">
             <div class="card">
                  <div class="card-header">
                    {{$category->name}}
                  </div>
                 <div class="card-body">
                     <a class="btn btn-primary" href="{{route('category.edit',[$category->slug])}}">Edit</a>
                     <a class="btn btn-danger" href=""
                      onclick="
                   var ondelete = confirm('Are you sure You want to delete ?');
                   if(ondelete){
                       event.preventDefault();
                       document.getElementById('delete').submit();
                   }
 "
                     >Delete</a>
                     <form  id="delete" action="{{route('category.destroy',[$category->slug])}}" method="post">
                         <input type="hidden" name="_method" VALUE="DELETE">
                         @csrf
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
    @endsection


