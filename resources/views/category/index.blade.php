@extends('template')
@section('content')
<!-- Page Content -->
  <div class="container-fluid">
  	  <h1>Category Form</h1>
        <div class="row">
            <div class="col-md-8">
  	 			 <table class="table table-bordered"  cellspacing="0" cellpadding="10" border="1">
  	 			 	<thead>
  	 			 		<tr>
  	 			 		  <th>No</th>
  	 			 		  <th>Name</th>
  	 			 		  <th>Edit</th>
  	 			 		  <th>Delete</th>
  	 			 		</tr>
  	 			 	</thead>
  	 			 	<tbody>
  	 			 		 @php 
  	 			 		 $i=1;
  	 			 		 @endphp
  	 			 		 @foreach($categories as $row)
  	 			 		 <tr>
  	 		   <td>{{$i++}}</td>
  	 		   <td>{{$row->name}}</td>
  	 		    <td><a href=" {{route('category.edit',$row->id)}}" class="btn btn-dark" style="float:right">Edit</a></td>
  	 	      <td>
           <form method="post" action="{{route('category.destroy',$row->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
          </form>
          </td>
           
          </tr>
          @endforeach
            
  	 	   </tbody>
  	 	   </table>
  	 		</div>
  	 	</div>
  	 </div>
  	 @endsection
      