<?php require_once '../../config/db.php';	 ?>

<h4> Add Features </h4>
		<div class="form-group">
				<label for="exampleSelect1" class="form-label">Select Plan</label><span class="required">*</span>
				<select class="form-select" id="planId">
						<option value="" disabled="true" selected="true">Choose</option>

<?php

	$selectPlans = $conn->query("SELECT * FROM plans ORDER BY amount DESC");

	if($selectPlans->num_rows > 0){

		while($data = $selectPlans->fetch_array()){

			if($data['subscription'] == 1){
				$subs = "Monthly";
			} else {
				$subs = "Yearly";
			}

?>

                        <option value="<?= $data['id'] ?>"><?= $data['plan'].' | '.$subs.' | $'.$data['amount'] ?></option>

<?php

		}

	} else {

?>

						<option value="" disabled>No Plans Listed</option>

<?php

	}

?>
					</select>
				</div>
				<div class="form-group">
					<label class="col-form-label" for="inputDefault">Feature</label><span class="required">*</span>
					<input type="text" class="form-control" placeholder="eg. Unlimited Cloud Storage" id="featName" required="true" value="">
				</div>
				<div class="form-group">
					<label for="exampleTextarea" class="form-label ">Feature Description Desciption</label><span>(optional)</span>
					<textarea class="form-control" id="featDesc" required="true" value="" rows="3"></textarea>
				</div>
				<button type="button" id="saveFeat" onClick="savedata('feat');showPreview('feat')" class="btn btn-success">Add and Preview</button>


				<script src="js/featureModule.js"></script>