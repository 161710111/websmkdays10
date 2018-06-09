@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Ekskul 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Ekskul</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $ekskuls->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Keterangan</label>
						<input type="text" name="keterangan" class="form-control" value="{{ $ekskuls->keterangan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Fasilitas</label>
						<input type="text" name="nama" class="form-control" value="{{ $ekskuls->Fasilitas->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Prestasi</label>
						<input type="text" name="nama" class="form-control" value="{{ $ekskuls->Prestasi->nama }}"  readonly>
			  		</div>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection