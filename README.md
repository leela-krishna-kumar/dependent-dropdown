# dependent-dropdown

Main Code Dependencies :

//sof
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />


//eof
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


//ajax code
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
    
    
    //controller code
    public function cc_dynamic(Request $request)
    {

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = Countrycity::where($select, $value)->orderBy('cities', 'asc')->get();

        $output = '<option value="">Select from ' . ucwords($dependent) . '</option>';

        /* Schema
         {
            "country" : ABC,
            "cities": ['123', '456']
            } */


        foreach ($data as $row) {
            foreach ($row['cities'] as $cities) {
                $output .= '<option value="' . $cities . '">' . $cities . '</option>';
            }
        }

        echo $output;
    }
        
    
    Happy Coding!
