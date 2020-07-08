@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Tambah Data Artist</h3>

	<form action="{{ url('/artist') }}" method="POST">
		@csrf
		<table>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="artist_name"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SAVE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection