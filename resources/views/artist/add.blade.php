@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Artist</h3>
<form method="post" action="{{ url('/artist') }}">
	@csrf
	<table>
		<tr>
			<th>ARTIST NAME</th>
			<td><input type="text" name="artist_name"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SAVE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection