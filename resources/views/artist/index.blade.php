@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<center><h3>DAFTAR ARTIST</h3></center>
	<table>
		<tr>
			<th>ID</th>
			<th>ARTIST NAME</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			<td><a id="btn"  href="{{ url('artist/'.$row->artist_id.'/edit') }}">EDIT</a></td>
			<td><form action="{{ url('/artist/'.$row->artist_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">DELETE</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('artist/create') }}">Tambah Data</a>
</div>
@endsection