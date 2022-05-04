<?php
	
	require_once 'db.php';

	if(isset($_POST['saveData'])){


		$pName = $conn->real_escape_string($_POST['pName']);
		$pDesc = $conn->real_escape_string($_POST['pDesc']);
		$sType = $conn->real_escape_string($_POST['sType']);
		$pAmount = $conn->real_escape_string($_POST['pAmount']);

		$checkPlan = $conn->query("SELECT * FROM plans WHERE binary(\"$pName\" = plan)");

		if($checkPlan->num_rows > 0){

		$messages = array("status"=>200, "message"=>"Sorry, Plan is already listed");

		echo json_encode($messages);

		} else {

			$insertPlan = $conn->query("INSERT INTO plans (plan,description,amount,subscription) VALUES('$pName','$pDesc','$pAmount','$sType')");

			if($insertPlan){


				$messages = array("status"=>200, "message"=>"Plan Saved Successfuly");

				echo json_encode($messages);

			} else {

				$messages = array("status"=>500, "message"=>"Failed to save plan ".$conn->error);

				echo json_encode($messages);

			}

		}

	} elseif(isset($_POST['addFeat'])){

		$planId = $conn->real_escape_string($_POST['planId']);
		$featName = $conn->real_escape_string($_POST['featName']);
		$featDesc = $conn->real_escape_string($_POST['featDesc']);

		$checkFeat = $conn->query("SELECT * FROM features WHERE binary(\"$planId\" = planId AND binary(\"$featName\" = feature))");

		if($checkFeat->num_rows > 0){

		$messages = array("status"=>200, "message"=>"Sorry, Feature is already Added to this plan");

		echo json_encode($messages);

		} else {

			$insertFeat = $conn->query("INSERT INTO features (planId,feature,description) VALUES('$planId','$featName','$featDesc')");

			if($insertFeat){


				$messages = array("status"=>200, "message"=>"Feature Added Successfuly");

				echo json_encode($messages);

			} else {

				$messages = array("status"=>500, "message"=>"Failed to add feature ".$insertFeat->error);

				echo json_encode($messages);

			}

		}

	} else {

		$messages = array("status"=>500, "message"=>"Button not set".$conn->error);

		echo json_encode($messages);

	}

?>