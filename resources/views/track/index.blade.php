@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<center><h3>DAFTAR TRACK</h3></center>
	<table>
		<tr>
			<th>ID</th>
			<th>TITLE SONG</th>
			<th>ALBUM</th>
			<th>FILE</th>
			<th>DELETE</th>
		</tr>
		@foreach($rows as $row)
		<tr class="cen">
			<td>{{ $row->track_id }}</td>
			<td>{{ $row->track_name }}</td>
			<td>{{ $row->album->artist->artist_name }} - {{ $row->album->album_name }}</td>
			<td>
				<audio controls>
        			<source src="lagu/{{ $row->file }}" type="audio/mp3">
        		</audio>
			</td>
			<td><form action="{{ url('/track/'.$row->track_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn" >DELETE</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('track/create') }}">Tambah Data</a>
</div>
@endsection