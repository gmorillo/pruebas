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
					<form action="javascript:void(0)" id="contact_us" method="GET"  class="form-inline pull-rigth">
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
							<input type="text" name="bio" id="bio" class="form-control" placeholder="Bio">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" id="srcBtn">
								<i class="fas fa-search text-white">Search </i>
							</button>
						</div>		
					</form>
				</div>
			</div>
			</div>
			<div class="col-md-8">
				<div id="productData">
					<table class="table table-hover table-striped" id="hola">
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
	</div>
  </body>
</html>

<script>
	$(document).ready(function() {
		$('#srcBtn').click(function(event) {
			var name = $("#name").val();
			var email = $("#email").val();
			var bio = $("#bio").val();

			$.ajax({
				url : '{{route('searching')}}',
				type : "GET",
				dataType: 'html',
				data: 'name=' + name + '&email=' + email + '&bio=' + bio,
				success: function (response) {
					//console.log(response),
					$('#productData').html(response),
	                toastr.success('Listado correctamente via ajax')
	            },
	            error: function (response) {
	                toastr.error('Error al listar via ajax')
	            }
          	});
		});
	});
</script>