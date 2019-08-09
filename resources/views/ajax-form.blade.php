<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://kit.fontawesome.com/6e54860a37.js"></script>

  <style>
   .error{ color:red; } 
  </style>
</head>
  
<body>
  
<div class="container">    
    <form id="contact_us" method="post" action="javascript:void(0)" class="my-5"> 
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name">
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>
      <div class="form-group">
        <label for="email">Email Id</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>      
      <div class="form-group">
        <label for="mobile_number">Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number" maxlength="10">
        <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
      </div>
      <div class="alert alert-success d-none" id="msg_div">
              <span id="res_message"></span>
      </div>
      
      <div class="form-group">
       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
      </div>
    </form>

    <div class="container">
    	<div class="panel panel-primary">
      		<div class="panel-body">
      			@if ($message = Session::get('success'))
			        <div class="alert alert-success alert-block">
			            <button type="button" class="close" data-dismiss="alert">×</button>
			                <strong>{{ $message }}</strong>
			        </div>
			        <video controls><source src="img/{{ Session::get('video') }}" type="video/mp4"></video>
		        @endif
		        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
		        	@csrf
			        <div class="row">
			        	<div class="col-md-6">
				        	<input type="file" name="video" class="form-control" multiple>
				    	</div>
				        <div class="col-md-6">
				        	<button type="submit" class="btn btn-success">Upload</button>
				    	</div>
		    		</div>
		        </form>
		  	</div>
		</div>
	</div><br><br>
	
	<br><br><br>
    <div class="container">
    	<table id="table_id" class="display" enctype="multipart/form-data">
		    <thead>
		        <tr>
		            <th>Nombre</th>
		            <th>Correo</th>
		            <th>Móvil</th>
		            <th>Video</th>
		            <th>&nbsp;</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach($data as $user)
		        <tr id="user{{ $user->id }}">
		            <td>{{$user->name}}</td>
		            <td>{{$user->email}}</td>
		            <td>{{$user->mobile_number}}</td>
		            <td><video width="400" controls><source src="/img/{{$user->video}}" type="video/mp4"></video></td>
					<td>
						<a href="javascript:void(0)" data-id="{{ $user->id }}" onclick="return false;"  class="delete-user"><i class="far fa-trash-alt"></i></a>
						<!--<a href="/{{$user->id}}" onclick="return false;" id="add"><i class="fas fa-plus"></i></a><--></-->
					</td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
    </div>
  
</div>
<script>
	$(document).ready( function () {
	    var tablaTest = $('#table_id').DataTable();
	
		tablaTest.on( 'click', '.delete-user', function () {

	        var user_id = $(this).data("id");
	        //console.log(user_id);
        	confirm("Are You sure want to delete !");

        	$.ajax({
	            type: "GET",
	            url: "{{ url('delete')}}"+'/'+user_id,
	            success: function (data) {
	                $("#user" + user_id).remove();
	                toastr.success('eliminado corerctamente')
	            },
	            error: function (data) {
	                console.log('Error:', data);
	                astr.error('Error al eliminar')
	            }
	        });
	    });



		if ($("#contact_us").length > 0) {
			$("#contact_us").validate({
				rules: {
					name: {
						//required: true,
						minlength: 3,
						maxlength: 50
					},

					mobile_number: {
						//required: true,
						digits:true,
						minlength: 10,
						maxlength:12,
					},
					email: {
						//required: true,
						maxlength: 50,
						email: true,
					},    
				},
				/*messages: {
					name: {
						required: "Please enter name",
						maxlength: "Your last name maxlength should be 50 characters long."
					},
					mobile_number: {
						required: "Please enter contact number",
						minlength: "The contact number should be 10 digits",
						digits: "Please enter only numbers",
						maxlength: "The contact number should be 12 digits",
					},
					email: {
						required: "Please enter valid email",
						email: "Please enter valid email",
						maxlength: "The email name should less than or equal to 50 characters",
					},
				},*/
				submitHandler: function(form) {
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					$('#send_form').html('Sending... <i class="fa fa-spinner fa-spin"></i>');

					$name = $('#name').val();
					$mobile_number = $('#mobile_number').val();
					$email = $('#email').val();

					if($mobile_number == ''){
						toastr.error('Campo mobile_number requerido');
						$('#send_form').html('Submit');
						$( "#mobile_number" ).focus();
					}
					if($email == ''){
						toastr.error('Campo email requerido');
						$('#send_form').html('Submit');
						$( "#email" ).focus();
					}
					if($name == ''){
						toastr.error('Campo name requerido');
						$('#send_form').html('Submit');
						$( "#name" ).focus();
					}

					$.ajax({
						url: "{{route('save-form')}}" ,
						type: "POST",
						data: $('#contact_us').serialize(),
						success: function( response ) {
							$('#send_form').html('Submit');
							toastr.info('Se tienen datos relacionados')

							document.getElementById("contact_us").reset(); 
							setTimeout(function(){
								$('#res_message').hide();
								$('#msg_div').hide();
							},10000);
						}
					});
				}
			})
		}
	} );
</script>
</body>
</html>