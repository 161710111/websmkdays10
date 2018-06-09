@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Program Studi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $programstudis->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Keterangan</label>
						<input type="text" name="keterangan" class="form-control" value="{{ $programstudis->keterangan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Fasilitas</label>
						<input type="text" name="nama" class="form-control" value="{{ $programstudis->Fasilitas->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Mitra Industri</label>
						<input type="text" name="nama" class="form-control" value="{{ $programstudis->Industri->nama }}"  readonly>
			  		</div>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection