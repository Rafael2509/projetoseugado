$(document).ready(function(){
	$("input[type=text][name=CPF]").mask('999.999.999-99');
	$("input[type=text][name=birthday]").mask('99/99/9999');
	$("input[type=text][name=start_date]").mask('99/99/9999');
	$("input[type=text][name=finish_date]").mask('99/99/9999');
	$("input[type=text][name=telphone]").mask('99/99/9999');
	$cont = 0;
	$verify = 0;
	$('.employed input').each(function(){
		if($(this).hasClass('required')){			
			$cont ++;
		}
	});
	$("#user input").on("blur", function(){ 
		if($(this).hasClass('required')){
			$verify ++;			
		}
		if($verify === $cont){
			$('.locked:after').css("content","\f029");
			$('.locked').removeClass('locked');
		}
	});
	$("input[type=button][name=button-del]").click(function(){
		$id = this.id;
		$.ajax({
		   url:   'global.php',
		   type:  'POST',
		   data:  $id,
		   error: function() {
		         alert('Erro ao tentar ação!');
		   },
		   success: function( texto ) { 
		   		alert('ok');
		   },
		   beforeSend: function() {
		   }
		});
	});
});