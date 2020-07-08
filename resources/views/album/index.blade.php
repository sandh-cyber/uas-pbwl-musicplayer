@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<center><h3>DAFTAR ALBUM</h3></center>
	<table>
		<tr>
			<th>ID</th>
			<th>ALBUM NAME</th>
			<th>ARTIST NAME</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td><a id="btn" href="{{ url('album/'.$row->album_id.'/edit') }}">EDIT</a></td>
			<td><form action="{{ url('/album/'.$row->album_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">DELETE</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('album/create') }}">Tambah Data</a>
</div>
@endsection