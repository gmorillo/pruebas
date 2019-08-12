@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
	<div class="text-center bg-danger p-3 text-white">Registration Property</div>
	<div class="container my-5">
		<form>
			<div class="row border">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Client<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Property ID<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Property Stage<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Ownership Type<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Owner<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3	">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Servicer<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">System Register Date<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Property Substage<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">DTA Reference<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Owner SPV Name<span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label">Adquisition Type<span class="text-danger">*</span></label>
								<div class="col-sm-8">
									<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label">Adquisition Type<span class="text-danger">*</span></label>
								<div class="col-sm-8">
									<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label">Adquisition Type<span class="text-danger">*</span></label>
								<div class="col-sm-8">
									<input type ="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>




<div class="container-fluid">
	<div class="row">
		<div class="col-6">
			<div class="form-group w-50">
			    <label for="exampleFormControlSelect1">País</label>
			    <select class="form-control" id="country">
					<option value="PA">Panamá</option>
			    </select>
		  	</div>
		  	<div class="form-group w-50">
			    <label for="exampleFormControlSelect1">Ciudad</label>
			    <select class="form-control" id="city">
					<option value="1">Panamá City</option>
					<option value="2">Chiriquí</option>
			    </select>
		  	</div>
		  	<div class="form-group w-50">
			    <label for="exampleFormControlSelect1">Zona</label>
			    <select class="form-control" id="city">
					<option value="1">Obarrio</option>
					<option value="2">San Francisco</option>

			    </select>
		  	</div>
		</div>
		<div class="col-6">
			<input type="text" id="lat" name="lat">
			<input type="text" id="lng" name="lng">
            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    		<div id="map"></div>
    		
		</div>

	</div>
</div>

<br><br><br><br><br>


	@for($k = 0; $k < 100; $k++)
		<br>	
		@for ($i = 0; $i < 5; $i++)
    		The current value is {{ $i }} <br>
		@endfor

		@for ($j = 0; $j < 2; $j++)
		    The current value is {{ $j }} <br>
		@endfor
	@endfor
@endsection