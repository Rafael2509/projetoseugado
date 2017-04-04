$(document).ready(function(){
	$("input[type=text][name=CPF]").mask('999.999.999-99');
	$("input[type=text][name=birthday]").mask('99/99/9999');
	$("input[type=text][name=start_date]").mask('99/99/9999');
	$("input[type=text][name=finish_date]").mask('99/99/9999');
	$("input[type=text][name=telphone]").mask('(99)9999-9999');
	$("input[type=text][name=search-by-cpf]").mask('999.999.999-99');
	$cont = 0;
	$verify = 0;
	$('.employed input').each(function(){
		if($(this).hasClass('required')){			
			$cont ++;
		}
	});
	$("#user input").on("blur", function(){ 
		if($(this).val() !== ''){
			if($(this).hasClass('required')){
				$verify ++;			
			}					
		}	
		if($verify === $cont){			
			$('.locked').removeClass('locked');
		}
	});
	$(".button-edit").click(function(){
		$input = 'input.edit-' + $(this).attr('value');
		if($($input).hasClass('hidden') == true){
			$($input).removeClass('hidden');
			$("#save-" + $(this).attr('value')).removeClass('hidden');
		}else{
			$($input).addClass('hidden');
			$("#save-" + $(this).attr('value')).addClass('hidden');
		}
		
	});
});