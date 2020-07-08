@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Track</h3>
<form method="post" action="{{ url('/track') }}" enctype="multipart/form-data">
	@csrf
	<table>
		<tr>
			<th>TITLE</th>
			<td><input type="text" name="track_name"></td>
		</tr>
		<tr>
			<th>ALBUM & ARTIST</th>
			<td>
				<select name="album_id">
					@foreach($lst as $row)
					<option value="{{ $row->album_id }}">{{ $row->album_name }} - {{ $row->artist->artist_name }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<th>FILE</th>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SAVE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection