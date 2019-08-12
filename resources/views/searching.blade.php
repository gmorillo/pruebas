<table class="table table-hover table-striped">
	<tbody>
		@foreach($users as $user)
			<tr >
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->bio}}</td>
			</tr>
		@endforeach
	</tbody>
</table>