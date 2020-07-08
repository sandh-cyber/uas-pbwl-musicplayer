@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Album</h3>
<form method="post" action="{{ url('/album/'.$row->artist_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>ALBUM NAME</th>
			<td><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
		</tr>
		<tr>
			<th>ARTIST NAME</th>
			<td>
				<select name="artist_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artist_id }}" >{{ $rows->artist_name }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection