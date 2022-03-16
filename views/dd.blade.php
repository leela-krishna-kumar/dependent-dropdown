<!DOCTYPE html>
<html lang="en">

	<head>
		@include('layouts.head')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
	</head>


	<body>

		<!-- HEADER SECTION -->
		<header id="home">
			<div class="container">
				@include('layouts.nav')
			</div>

			<!-- HERO SECTION -->
			<div class="container-fluid hero" style="height:1000px; padding-top:100px;">

				<div class="" style="padding:0 0px 0 400px;">

					<form action="{{ url('/risk-details-add') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div>
							<div>
								<div class="col-sm-4 mb-4">
									<div class="min-hg">
										<label for="exampleFormControlInput1" class="form-label">Country</label>

										<select class="form-control form-custom selectpicker input-lg dynamic" id="country" name="country" data-live-search="true" data-style="btn-outline-warning" aria-label="Default select example" data-dependent="cities" required>
											<option value="">Select Country</option>
											<option value="All Countries">Select All Countries</option>
											@foreach($country_list as $country)
												@if($country->country != 'All Countries')
													<option value="{{ $country->country }}">{{ $country->country }}</option>
												@endif
											@endforeach
										</select>


									</div>
								</div>


								<div class="col-sm-4 mb-4">
									<div class="min-hg">
										<label for="exampleFormControlInput1" class="form-label">City</label>

										<select class="form-control form-custom input-lg dynamic" id="cities" name="city" data-live-search="true" data-style="btn-outline-warning" aria-label="Default select example" required>
											<option value="">Select City</option>

										</select>

									</div>
								</div>
							</div>
						</div>


						<div class="text-end" style="padding-left: 300px;">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>

							<button type="submit" class="btn btn-success">Save</button>

						</div>


					</form>


				</div>



			</div>


		</header>

		
		

		<script>
			$(document).ready(function () {

				$('.dynamic').change(function () {
					if ($(this).val() != '') {
						var select = $(this).attr("id");
						var value = $(this).val();
						var dependent = $(this).data('dependent');
						var _token = $('input[name="_token"]').val();
						$.ajax({
							url: "{{ route('dynamicdependent.fetch') }}",
							method: "POST",
							data: {
								select: select,
								value: value,
								_token: _token,
								dependent: dependent
							},
							success: function (result) {
								$('#' + dependent).html(result);

							}

						})
					}
				});

				$('#country').change(function () {
					$('#cities').val('');
				});
			});

		</script>



		<!-- FOOTER SECTION -->
		@include('layouts.footer')

		<!-- Scripts -->


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>



						<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


		<script src="{{ asset('js/slick.min.js') }}"></script>
		<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>





		<!-- Scripts Ends -->


	</body>

</html>
