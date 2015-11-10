<link rel="stylesheet" href="styles/validationEngine.jquery.css" type="text/css" media="screen" charset="utf-8" />
<script src="scripts/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="scripts/jquery.validationEngine.js" type="text/javascript"></script>
<script language="javascript">
	/*
	$(function(){
		$('form').jqTransform({imgPath:'scripts/jqtransformplugin/img/'});
	});
	
	$(document).ready(function() {
		$("#ContactMe").validationEngine()
    })
    */
    
    
    $(document).ready(function(){
	//$('#ContactMe').jqTransform({imgPath:'scripts/jqtransformplugin/img/'});

	$("button").click(function(){

		$(".formError").hide();

	});

	var use_ajax=true;
	$.validationEngine.settings={};

	$("#ContactMe").validationEngine({
		inlineValidation: true,
		success :  function(){use_ajax=true},
		failure : function(){use_ajax=false;}
	 })

	$("#ContactMe").submit(function(e){

			if(!$('#yourName').val().length)
			{
				$.validationEngine.buildPrompt(".jqTransformSelectWrapper","* This field is required","error")
				return false;
			}
			
			if(use_ajax)
			{
				$('#loading').css('visibility','visible');
				$.post('submit.php',$(this).serialize()+'&ajax=1',
				
					function(data){
						if(parseInt(data)==-1)
							$.validationEngine.buildPrompt("#captcha","* Wrong verification number!","error");
							
						else
						{
							$("#ContactMe").hide('slow').after('<h1>Thank you!</h1>');
						}
						
						$('#loading').css('visibility','hidden');
					}
				
				);
			}
			e.preventDefault();
	})

});


</script>