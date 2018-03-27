@extends('layouts.app')

@section('content')

	<button type="button" style="float: right; margin-right: 40px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create</button>
	</br>
	</br>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		  <form action="{{route('hotel.create')}}" method="post">
		  {{ csrf_field() }}
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-body">
			       <div class="form-group">
				      	<label>Name</label>
				        <input  class="form-control" type="text" name="name" required="">
			       </div>
			        <div class="form-group">
				      	<label>Address</label>
				        <input class="form-control" type="text" name="address" required="">
				    </div>
				    <div class="form-group">
				      	<label>Email</label>
				        <input class="form-control" type="text" name="email" required="">
				    </div>

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

</style>
@endpush