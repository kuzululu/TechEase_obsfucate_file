<?php
 goto DqhTj; XwXRV: include "\x2e\x2e\x2f\143\x6c\141\x73\x73\x2f\143\154\x61\163\x73\x2e\x70\x68\x70"; goto EDtxX; eSKhG: require_once "\56\56\x2f\143\x6f\156\164\x72\157\154\154\x65\x72\57\162\x65\161\165\145\x73\164\56\160\150\x70"; goto ePyXx; z88s_: require_once "\x2e\x2e\57\x69\x6e\143\x2f\163\145\x73\x73\x69\157\x6e\163\56\160\150\x70"; goto XwXRV; fYrQw: $dbConn = new DatabaseConnection($server, $user, $pass, $dbName); goto hRcDt; hRcDt: $conn = $dbConn->connectDb(); goto eSKhG; EDtxX: require_once "\x2e\x2e\x2f\151\156\x63\57\163\x68\x6f\167\x61\154\145\162\x74\56\x70\x68\x70"; goto fYrQw; DqhTj: require_once "\56\x2e\x2f\x69\x6e\x63\x2f\x63\157\x6e\146\x69\147\x2e\x70\150\x70"; goto z88s_; ePyXx: ?>

<!doctypehtml><html lang="en"><?php require_once "template-parts/head.php"; ?><body><?php 
	require_once "template-parts/navbar.php"; 
	require_once "modal/modal.php";
?><section class="mt-5 pt-3"id="dashboard"><div class="container-fluid"><div class="row"><div class="col-md-12"><h3 class="fw-bolder text-success text-uppercase">Pending Request</h3></div></div><div class="row"><div class="col-md-6"><small class="fw-bold text-primary">By Category</small><div class="d-flex"><label class="fw-bolder me-1 mt-2">Filter:</label> <input class="form-control resetSearch"id="filterPendingLogs"></div></div><div class="col-md-1 text-md-center"><a class="btn btn-sm btn-outline-danger mt-3 mt-md-4 d-md-block d-none"href="index"type="button">Reset</a> <a class="btn btn-sm btn-outline-danger mt-3 mt-md-4 d-md-none"href="index"type="button">Reset</a></div></div><div class="row"><div class="col-md-12"><div class="table-responsive"id="showLogsPending"><table class="table table-hover"><thead><tr class="text-center"><th>No.</th><th>Requestor Name</th><th>Department</th><th>Product / Model</th><th>Date / Time Request</th><th>Problem Description</th><th>Status</th><th>Options</th></tr></thead><tbody><?php
	
	class ViewLogsPending{
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
		?><tr class="text-center"><td><?= $ctr ?></td><td><?= $row["requestor_name"] ?></td><td><?= $row["department"] ?></td><td><?= $row["product_model"] ?></td><td><?= $formatdate ?></td><td><?= $row["problem_desc"] ?></td><td><?= $row["status"] ?></td><td><a class="btn btn-sm btn-outline-primary edit-pendLog"href="#"data-bs-target="#modalLogsPending"data-bs-toggle="modal"id="<?= $row['log_id'] ?>">Update</a></td></tr><?php
			$ctr++;	
		 }

		}
	}

$logsPendingManager = new PendingRecordsManager($conn);
$records = $logsPendingManager->records();

$viewLogs = new ViewLogsPending($records);
$viewLogs->displayRecords();
?></tbody></table></div></div></div></div></section><?php
	require_once "../template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?></body></html>