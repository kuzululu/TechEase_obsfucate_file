<?php
 goto jjZ53; u0j2Q: require_once "\x2e\56\x2f\x69\156\143\57\x73\x65\x73\163\x69\157\156\x73\x2e\160\x68\160"; goto E5hDD; Kuiod: require_once "\56\56\x2f\151\x6e\x63\x2f\163\150\157\x72\x74\x4c\x69\x6e\x6b\x2e\160\x68\160"; goto ZCnyW; dokDp: $conn = $dbConn->connectDb(); goto vAlGK; jjZ53: ?>
<!doctypehtml><?php  goto ZPPAp; ZCnyW: $dbConn = new DatabaseConnection($server, $user, $pass, $dbName); goto dokDp; ZPPAp: require_once "\56\x2e\57\151\156\143\x2f\143\157\x6e\x66\151\147\56\160\150\x70"; goto u0j2Q; uvg5k: require_once "\x2e\56\57\151\x6e\x63\57\x73\150\x6f\x77\141\154\145\162\x74\56\x70\150\160"; goto Kuiod; E5hDD: include "\56\x2e\x2f\x63\154\x61\x73\x73\57\143\154\x61\163\163\x2e\160\150\x70"; goto uvg5k; vAlGK: ?>
<html lang="en"><?php require_once "template-parts/head.php"; ?><body><?php require_once "template-parts/navbar.php"; ?><section class="mt-5 pt-3"id="records"><div class="container-fluid"><div class="row"><div class="col-md-12"><h3 class="fw-bolder text-success text-uppercase">Request Records</h3></div></div><div class="row"><div class="col-md-6"><small class="fw-bold text-primary">By Category</small><div class="d-flex"><label class="fw-bolder me-1 mt-2">Filter:</label> <input class="form-control resetSearch"id="filterRecords"></div></div><div class="col-md-1 text-md-center"><a class="btn btn-outline-danger btn-sm mt-3 mt-md-4 d-md-block d-none"href="records"type="button">Reset</a> <a class="btn btn-outline-danger btn-sm mt-3 mt-md-4 d-md-none"href="records"type="button">Reset</a></div></div><div class="row"><div class="col-md-12"><div class="table-responsive"id="showdataRecords"><table class="table table-hover"><thead><tr class="text-center"><th>No.</th><th>Requestor Name</th><th>Department</th><th>Product / Model</th><th>Date / Time Request</th><th>Problem Description</th><th>Status</th><th>Date Finished</th><th>Technician</th><th>Image</th></tr></thead><tbody><?php 

class ViewLogsRecords{
		private $get;

		public function __construct($get){
			$this->get = $get;
		}

		public function displayRecords(){
		$ctr = 1;
		while ($row = $this->get->fetch_assoc()) { 
			$origdateTime = $row["date_time"];
			$dateTime = new DateTime($origdateTime);
			$formatdate = $dateTime->format("M d, Y : h:i:A");

			$origDate = $row["date_finish"];
			$dateTimeFin = new DateTime($origDate);
			$formatDateFin = $dateTimeFin->format("M d, Y : h:i:A");
		?><tr class="text-center align-middle"><td><?= $ctr ?></td><td><?= $row["requestor_name"] ?></td><td><?= $row["department"] ?></td><td><?= $row["product_model"] ?></td><td><?= $formatdate ?></td><td><?= $row["problem_desc"] ?></td><td><?= $row["status"] ?></td><td><?= $formatDateFin ?></td><td><?= $row["technician"] ?></td><td><img class="img-fluid w-75"src="../uploads/<?= $row['image'] ?>"></td></tr><?php
			$ctr++;	
		 }

		}
	}

$logsRecordsManager = new LogsRecordsManager($conn);
$records = $logsRecordsManager->records();

$viewLogs = new ViewLogsRecords($records);
$viewLogs->displayRecords();


?></tbody></table></div></div></div></div></section><?php
	require_once "../template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?></body></html>