@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Industri
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">

			  		<div class="form-group">
			  			<label class="control-label">logo</label>	
			  			<input type="file" name="logo" class="form-control" value="{{ $industris->logo}}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Industri</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $industris->nama}}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $industris->deskripsi}}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection