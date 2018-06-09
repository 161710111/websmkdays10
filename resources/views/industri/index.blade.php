@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Industri
			  	<div class="panel-title pull-right"><a href="{{ route('industri.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Logo</th>
					  <th>Nama</th>
					  <th>Deskripsi</th>
					  <th>Jurusan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($industris as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{asset('assets/admin/images/icon/'.$data->logo.'')}}" width="70" height="70"></td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->deskripsi }}</td>
				    	<td>{{ $data->jurusan->nama}}</td>
				    	

<td>
	<a class="btn btn-warning" href="{{ route('industri.edit',$data->id) }}">Ubah</a>
</td>
<td>
	<form method="post" action="{{ route('industri.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Hapus</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection