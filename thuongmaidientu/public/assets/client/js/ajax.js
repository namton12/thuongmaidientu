$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});	
$(document).ready(function() {
	$('.qty').blur(function(){
    let rowid = $(this).data('id');
    $.ajax({
         url :'cart/'+rowid,
         type : 'put',	
         dataType :'json',
         data :{
         	qty : $(this).val(),

         },
         success : function(data){
         	
         	if(data.error){
					toastr.error(data.error, 'Thông báo', {timeOut: 5000});
				}else{
					toastr.success(data.result, 'Thông báo', {timeOut: 5000});
					location.reload();
				}
     }
    });

	});
	$('.close1').click(function(){
		$('#delete').modal('show');
		let rowid = $(this).data('id');
		$('.delProduct').click(function(){
			$.ajax({
				url : 'cart/'+rowid,
				type : 'delete',
				dataType : 'json',
				success : function(data){
					$('#delete').modal('hide');
					toastr.success(data.result, 'Thông báo', {timeOut: 5000});
					location.reload();
				}
			});
		});
	});
	$('.errorEmail').hide();
	$('.errorPhone').hide();
	$('.errorAddress').hide();
	$('.addAdress').click(function(){
		var active = '';
		if($('.actives').prop('checked')){
			active = 'on';
		}else{
			active = 'off';
		}
		$.ajax({
			url : 'customers',
			type : 'post',
			data : {
				email : $('.email').val(),
				phone : $('.phone').val(),
				address : $('.address').val(),
				active : active,
			},
			dataType : 'json',
			success : function(data){
				$('#address').modal('hide');
				toastr.success(data, 'Thông báo', {timeOut: 5000});
				location.reload();
			},
			error : function(data){
				var error = $.parseJSON(data.responseText);
				if( typeof error.errors.email != 'undefined' && error.errors.email.length > 0 ){
					$('.errorEmail').show();
					$('.errorEmail').html(error.errors.email);
				}
				if( typeof error.errors.phone != 'undefined' && error.errors.phone.length > 0 ){
					$('.errorPhone').show();
					$('.errorPhone').html(error.errors.phone);
				}
				if( typeof error.errors.address != 'undefined' && error.errors.address.length > 0 ){
					$('.errorAddress').show();
					$('.errorAddress').html(error.errors.address);
				}
			}
		});
	});
});