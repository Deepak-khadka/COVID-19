@extends('master.master')

@section('title')
   Category
    @endsection

@section('content')

    <div class="container">
        <div class="row">


         <div class="col-9">
             <table class="table table-bordered">
                 <tr>
                     <th>SN</th>
                     <th>Category Name</th>
                 </tr>
                 @php  $a = 1;  @endphp
                 @foreach($category as $category)
                 <tr>
                     <td>{{$a++}}</td>
                     <td><a href="{{route('category.show',[$category->slug])}}">{{$category->name}}</a> </td>
                 </tr>
                     @endforeach
             </table>
         </div>
        <div class="col-2">
            <button class="btn btn-outline-dark">Add Category</button>
        </div>
        </div>
    </div>

    @endsection
