@extends('template')
@section('content')
  <div class="container">

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      	 <h1>Post Create Form</h1>
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

   <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
              <div class="form-group">
                @csrf
                <label>Title:</label>
                <input type="text" name="title" class="form-control">
              </div>
             <div class="form-group">
                <label>Contact:</label>
                <input type="email" name="content" class="form-control">
              </div>
             <div class="form-group">
                <label>Photo:</label><span class="text-danger">[supported file types:jpeg,png]</span>
                <input type="file" name="photo" class="form-control">
              </div>
              <div class="form-group">
                 <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
              </div>
               <div class="form-group">
                 <label>Categories:</label>
                 <select name="category" class="form-control">
                   <option value="">Choose Category</option>
                   {--accept data and loop--}
                   @foreach($categories as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>@endforeach
                 </select>
               </div>
              
              
          </form>
      </div>
    </div>
  </div>




@endsection