$('#saveFeat').hide();

$('#featName').on('keyup', () => {

	if($('#featName').val() !== ""){
		$('#saveFeat').fadeIn();
	} else {
		$('#saveFeat').hide();
	}

})