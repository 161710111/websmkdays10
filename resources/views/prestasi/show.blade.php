@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Prestasi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Prestasi</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $prestasis->nama}}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Perolehan</label>	
			  			<input type="text" name="perolehan" class="form-control" value="{{ $prestasis->perolehan}}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection