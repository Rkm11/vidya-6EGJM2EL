@extends('layouts.master')
@php
$ID = 'batch';
@endphp
@push('header')
<script>
	ID = '{{ $ID }}';
</script>
@endpush

@section('page-title')
<div class="pull-left">
	Create {{ ucfirst($ID) }}
</div>
<div class="pull-right">
	<a href = "javascript:void(0);" onclick="window.history.back()" class="btn btn-danger">Back</a>
</div>

@endsection
@section('content')

<div class="col-lg-12">

		<div class="content-body" style="background-color:rgb(84, 173, 197));>
			<form id="{{ $ID }}Form">
				<div class="row">
					<div class="col-xs-12 col-sm-12 ">
						<div class="col-sm-offset-3 col-sm-6">
							<div class="form-group">
								<label class="form-label">Batch Title<span style="color:red;">*</span>:</label>
								<span class="desc">&nbsp;</span>
								<div class="controls">
									<input type="text" class="form-control" name="name" placeholder="e.g. Morning" >
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-sm-12">
						<div class="text-center">
							<button type="submit" class="btn btn-success">Create</button>
						</div>
					</div>
				</div>
				<div id = "{{ $ID }}Msg" class="text-center">
				</div>
			</form>
		</div>
<<<<<<< HEAD

=======

>>>>>>> c163562a514f266637b079789680768cdaf97bb6
</div>
<!-- END CONTAINER -->

@endsection

@push('footer')
<script>
	CRUD.formSubmission("{{ route($ID.'.store') }}", 0,{'empty' : 'name'});
</script>
@endpush
