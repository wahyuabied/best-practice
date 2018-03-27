@extends('layouts.app')

@section('content')

	<button type="button" style="float: right; margin-right: 40px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create</button>
	</br>
	</br>
	<div class="container">
		<div class="row">
	      
			@foreach($data as $data)
			<div class="col-sm-6">
			  <div class="card col-sm-12">
				    <h4 style="text-align: center;"><b>{{$data->title}}</b></h4> 
				    <p style="text-align: center;">{{$data->content}}</p> 
			  </div>
			</div>
			@endforeach
			
		</div>
	</div>
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		  <form action="{{route('artikel.create')}}" method="post">
		  {{ csrf_field() }}
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-body">
			      <div class="form-group">
			      	<label>Title</label>
			        <input  class="form-control" type="text" name="title" required="">
			       </div>
		        <div class="form-group">
			      	<label>Title</label>
			        <textarea class="form-control" type="text" name="content" required=""></textarea> 
			    </div>
			    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">

		      </div>
		      <div class="modal-footer">
		      	<button type="submit" class="btn btn-primary">Save</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		    </form>
		  </div>
		</div>

@endsection
@push('style')
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>
@endpush