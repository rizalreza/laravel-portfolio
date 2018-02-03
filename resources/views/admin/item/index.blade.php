@extends('admin.layout.admin')



@section('content')

	<h3>List Post</h3>
	<br>
	<br>
	

<div class="row">
<div class="col-md-12">
<ul>
	<table class="table">

    	 <thead class="thead-light">
      		<tr>
        		<th><center>Title</center></th>
        		<th><center>Description</center></th>
        		<th><center>Image</center></th>
        		<th><center>Action</center></th>


      		</tr>
    	</thead>
		@forelse($items as $item)
    	<tbody>
      		 <tr>
       		 	<td style="width: 100px;"><br/><br/>{{$item->title}}</td>
       		 	<td style="width: 200px;"><br/><br/>{{$item->description}}</td>
       		 	<td><img src='{{asset("images/$item->image")}}' width=150px height=100px></td>
       		 	<td style="width: 170px;">
            <br/>
            <br/>
            <a class="btn btn-primary" href="{{route('item.edit',$item->id)}}">Update</a>
            {!! Form::open(['method' => 'DELETE','route' => ['item.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
              
                
       		 	</td>
     		 </tr>
   		</tbody>


		@empty

	<h3>You have no post !!</h3>
	
 	 </table>
    @endforelse

</ul>
</div>
</div>

@endsection
