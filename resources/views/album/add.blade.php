@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Album</h3>
<form method="post" action="{{ url('/album') }}">
	@csrf
	<table>
		<tr>
			<th>ALBUM NAME</th>
			<td><input type="text" name="album_name"></td>
		</tr>
		<tr>
			<th>ARTIST NAME</th>
			<td>
				<select name="artist_id">
					@foreach($lst as $row)
					<option value="{{ $row->artist_id }}">{{ $row->artist_name }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="SAVE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection