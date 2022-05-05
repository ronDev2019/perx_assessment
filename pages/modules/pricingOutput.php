<?php
	
require_once '../config/db.php';

$outputPlan = $conn->query("SELECT * FROM plans ORDER BY id");

if($outputPlan->num_rows > 0){

while($planData = $outputPlan->fetch_array()){

$planId	= $planData['id'];

if($planData['subscription'] == 1){
	$sub = "Monthly";
} else {
	$sub = "Yearly";
}

?>
				<div class="col-lg-3">
                    <div class="card mt-5 pricepreview">
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

						<label for="featureName" id="planAmountPrev" class="feat bold"> <img src="../img/heavy-check-mark-svgrepo-com.svg" class="mr-2" alt=""> <?= $featData['feature'] ?></label>
						<label for="featureDesc" id="planAmountPrev" class="feat desc"> <?= $featData['description'] ?></label>


<?php

	}

} else {

?>

						<label for="featureName" id="planAmountPrev"> No Feature Added </label>


<?php

}

?>

					</div>
				</div>

<?php

}

} else {

?>

	<h1 class="text-center"> No Plan Created </h1>

<?php

}

?>