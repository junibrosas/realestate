@if( session()->has('flashMessage') )

	<script type="text/javascript">
		swal({   
			title: "{{ session('flashMessage.title')}}",   
			text: "{{ session('flashMessage.message') }}",   
			type: "{{ session('flashMessage.level') }}",
			timer: 2000,   
			showConfirmButton: false,
			/*showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Yes, delete it!",   
			closeOnConfirm: false }, 
			function(){   
				swal("Deleted!", 
					"Your imaginary file has been deleted.", 
					"success"); 
					*/
			});
	</script>

@endif