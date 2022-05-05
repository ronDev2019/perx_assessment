$('.previewPlan').hide();
$('.previewFeat').hide();
$('#save').hide();
$('#prev').hide();
$('.planAmount').hide();

// Forms Used for adding Plans, Features, Categories
$('#addPlan').hide();
$('#addFeat').hide();


// Use to show forms by call the function onClick
function showForm(val){

	if(val === "plan"){

		$('#addPlan').fadeIn()
		$('#addFeat').hide()

		$('.previewPlan').hide();
		$('.previewFeat').hide();

	} else if(val === "feat") {

		$('#addPlan').hide()
		$('#addFeat').fadeIn()

		$('.previewPlan').hide();
		$('.previewFeat').hide();

		$('#addFeat').load('pages/modules/featureModule.php');

	}

}

// Use to show Preview by call the function onClick
function showPreview(val){

	if(val === "plan"){

		$('.previewPlan').fadeIn()


	} else if(val === "feat") {

		$('.previewFeat').fadeIn()

	}

}

//Add Plan Form Scripts
$('#subType').on('change', () => {

	if($('#subType').val() !== null){

		$('.planAmount').fadeIn();

	} else {

		$('.planAmount').hide();

	}

});

$('#planAmount').on('keyup', () => {
	
	if($('#planAmount').val() !== "" || !$('#planAmount').val() === "0"){

		$('#prev').fadeIn();

	} else {

		$('#prev').hide();

	}

});


$('#prev').on('click', () => {
	
	let pName = $('#planName').val();
	let pDesc = $('#planDesc').val();
	let sType = $('#subType').val();
	let pAmount = $('#planAmount').val();
	let saveData = $('#save').val();

	if(pName === "" || pDesc === "" || sType == null || pAmount === ""){

		alert('Please Fill-in Required Fields');

	} else {

		$('#save').fadeIn();
		$('.preview').fadeIn();

		let subs = $('#subType').val();

		if(subs == 1){

			subs = "Monthly"

		} else {

			subs = "Yearly"

		}

		$('#planPrev').text($('#planName').val());
		$('#planDescPrev').text($('#planDesc').val());
		$('#planSubPrev').text(subs);
		$('#planAmountPrev').text('$'+$('#planAmount').val()+' USD');

	}

});

function savedata(val){

	if(val === 'plan'){

		let pName = $('#planName').val();
		let pDesc = $('#planDesc').val();
		let sType = $('#subType').val();
		let pAmount = $('#planAmount').val();
		let saveData = $('#save').val();

		if(pName === "" || pDesc === "" || sType == null || pAmount === ""){

			alert('Please Fill-in Required Fields');

		} else {

			$.ajax({
				url:'config/main.php',
				method:'POST',
				cache: false,
				dataType:'json',
				data: {pName:pName, pDesc:pDesc, sType:sType, pAmount:pAmount, saveData:saveData},
				success: function(response){

					if(response.status === 200){

						alert(response.message);
						$('#planName').val('');
						$('#planDesc').val('');
						$('#subType').val('');
						$('#planAmount').val('');
						$('#save').val('');

						$('#save').hide();
						$('#prev').hide();
						$('.planAmount').hide();

						$('.previewPlan').hide();
						$('.previewFeat').hide();
						$('.previewCat').hide();

					} else {

						alert(response.message);

					}

				},
				error:function(xhr, err){
					console.log(xhr,err);
				}
			})

		}

	} else if(val === 'feat') {

		let planId = $('#planId').val();
		let featName = $('#featName').val();
		let featDesc = $('#featDesc').val();
		let addFeat = $('#saveFeat').val();

		$.ajax({
			url:'config/main.php',
			method:'POST',
			cache: false,
			dataType:'json',
			data:{planId:planId, featName:featName, featDesc:featDesc, addFeat:addFeat},
			success:function(response){

				if(response.status === 200){

					//alert(response.message)
					//alert(planId)

					$.ajax({
						url:'pages/modules/featuresPreview.php',
						method:'POST',
						cache:false,
						data:{planId:planId},
						success:function(response){

							console.log(planId)
							$('.previewFeat').html(response);

						},
						error:function(err,xhr){
							console.log(err, xhr)
						}
					})

				} else {

					alert(response.message)

				}

			},
			error:function(err, xhr){
				console.log(err,xhr);
			}
		})


	}
}
//End of Add Plan Form Scripts
function deleteFeat(pID, fID){

$.ajax({
	url:'pages/modules/featuresPreview.php',
	method:'POST',
	cache:false,
	data:{planId:pID, featId:fID},
	success:function(response){

		console.log(planId)
		$('.previewFeat').html(response);

	},
	error:function(err,xhr){
		console.log(err, xhr)
	}
})

}