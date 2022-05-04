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
                        <label for="planPrev fontStyle" id="planPrev"> <?= $planData['plan'] ?> </label>
                        <label for="planDesc fontStyle" id="planDescPrev"> <?= $planData['description'] ?> </label>
                        <label for="planSub fontStyle" id="planSubPrev"> <?= $sub ?> </label>
                        <label for="planAmount fontStyle" id="planAmountPrev"> $<?= $planData['amount'] ?> </label>
                        <button type="button" class="btn btn-primary gstarted">Get Started</button>
                        <h5> Features & Benefits </h5>

<?php

$outputFeatures =  $conn->query("SELECT * FROM features WHERE planId = \"$planId\"");

if($outputFeatures->num_rows > 0){

	while($featData = $outputFeatures->fetch_array()){

?>

						<label for="featureName fontStyle" id="planAmountPrev"> <?= $featData['feature'] ?> <button type="button" class="btn btn-link" onclick="deleteFeat('<?= $planData['id'] ?>','<?= $featData['featureId'] ?>')">Delete</button> </label>
						<input type="hidden" value="<?= $planData['id'] ?>" id="planId">
						<input type="hidden" value="<?= $featData['featureId'] ?>" id="featId">


<?php

	}

} else {

?>

						<label for="featureName fontStyle" id="planAmountPrev"> No Feature Added </label>

<?php

}

?>