<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
    <script>
    	
    </script>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Búsqueda de usuarios</h1>
					<form action="{{route('users')}}" method="GET"  class="form-inline pull-rigth">
						
						<div class="form-group">
							<select name="name" id="name">
								<option value="">Seleccionar</option>
								@foreach($users as $u)
									<option value="{{$u->name}}">{{$u->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select name="email" id="email">
								<option value="">Seleccionar</option>
								@foreach($users as $u)
									<option value="{{$u->email}}">{{$u->email}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="bio" class="form-control" placeholder="Bio">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								<i class="fas fa-search text-white">Search </i>
							</button>
						</div>		
					</form>
				</div>
			</div>
			<div class="col-md-8">
				<table class="table table-hover table-striped">
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->bio}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			
			</div>
		</div>
	</div>
  </body>
</html>