<?php
	
require_once '../../config/db.php';

// Delete Feature
if(isset($_POST['planId'])){

	$planId = $conn->real_escape_string($_POST['planId']);
	@$featId = $conn->real_escape_string($_POST['featId']);

	$deleteFeat = $conn->query("DELETE FROM features WHERE planId = \"$planId\" AND featureId = \"$featId\"");
}

$planId = $conn->real_escape_string($_POST['planId']);

$outputPlan = $conn->query("SELECT * FROM plans WHERE id = \"$planId\"");
$planData = $outputPlan->fetch_array();

if($planData['subscription'] == 1){
	$sub = "Monthly";
} else {
	$sub = "Yearly";
}

?>
                    <h4> Preview </h4>
                    <div class="card mt-5" id="preview">
                        <label for="planPrev" id="planPrev" class="bold plan-name"> <?= $planData['plan'] ?> </label>
                        <label for="planDesc" id="planDescPrev"> <?= $planData['description'] ?> </label><hr>
                        <label for="planSub" id="planSubPrev" class="mt-2 bold"> <?= $sub ?> </label>
                        <label for="planAmount" id="planAmountPrev" class="bold price"> $<?= $planData['amount'] ?> USD </label>
                        <button type="button" class="btn btn-primary gstarted mb-3">Get Started</button>
                        <h5 class="text-center"> Features & Benefits </h5>

<?php

$outputFeatures =  $conn->query("SELECT * FROM features WHERE planId = \"$planId\"");

if($outputFeatures->num_rows > 0){

	while($featData = $outputFeatures->fetch_array()){

?>

						<label for="featureName" id="planAmountPrev" class="feat bold"> <img src="img/heavy-check-mark-svgrepo-com.svg" class="mr-2" alt=""> <?= $featData['feature'] ?> <button type="button" class="btn btn-link" onclick="deleteFeat('<?= $planData['id'] ?>','<?= $featData['featureId'] ?>')">Delete</button> </label>
						<label for="featureDesc" id="planAmountPrev" class="feat desc"> <?= $featData['description'] ?></label>
						<input type="hidden" value="<?= $planData['id'] ?>" id="planId">
						<input type="hidden" value="<?= $featData['featureId'] ?>" id="featId">


<?php

	}

} else {

?>

						<label for="featureName" id="planAmountPrev"> No Feature Added </label>

<?php

}

?>