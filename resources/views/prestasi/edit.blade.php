@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Prestasi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('prestasi.update',$prestasis->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Prestasi</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $prestasis->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('perolehan') ? ' has-error' : '' }}">
			  			<label class="control-label">Perolehan</label>
			  			<input type="text" name="perolehan" class="form-control" value="{{ $prestasis->perolehan }}"  required>
			  			@if ($errors->has('perolehan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perolehan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ekskul_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Ekskul</label>	
			  			<select name="ekskul_id" class="form-control">
			  				@foreach($ekskuls as $data)
			  				<option value="{{ $data->id }}" {{ $selectedEkskul == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('ekskul_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ekskul_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection