<?php
 goto qdDe7; p0wBV: require_once "\56\56\x2f\143\157\156\164\x72\157\x6c\x6c\x65\162\57\155\157\x64\x61\154\137\x64\x65\160\x61\x72\x74\x6d\x65\x6e\x74\x2e\x70\150\x70"; goto dnEKk; x3mdf: include "\56\56\57\143\154\141\163\163\57\143\154\141\x73\x73\56\x70\x68\x70"; goto HE4sN; wlkku: require_once "\56\x2e\x2f\151\x6e\143\x2f\x73\145\163\163\151\x6f\156\163\56\160\150\x70"; goto x3mdf; hSX3s: $dbConn = new DatabaseConnection($server, $user, $pass, $dbName); goto nENCu; qdDe7: require_once "\56\56\57\x69\x6e\x63\x2f\x63\157\x6e\x66\x69\147\56\160\x68\x70"; goto wlkku; nENCu: $conn = $dbConn->connectDb(); goto p0wBV; HE4sN: require_once "\56\x2e\x2f\151\156\x63\57\x73\x68\x6f\x77\141\x6c\145\x72\x74\x2e\x70\x68\x70"; goto hSX3s; dnEKk: ?>

<!doctypehtml><html lang="en"><?php require_once "template-parts/head.php"; ?><body><?php 
	require_once "template-parts/navbar.php"; 
	require_once "modal/modal.php";
?><section class="mt-5 pt-3"id="records"><div class="container-fluid"><div class="row"><div class="col-md-12"><h3 class="fw-bolder text-success text-uppercase">Department</h3></div></div></div><div class="container"><div class="row"><div class="col-md-7"><a class="btn btn-sm mt-md-4 btn-outline-primary"href="#"type="button"data-bs-target="#modalAddDepartment"data-bs-toggle="modal">Add Department</a></div><div class="col-md-4"><small class="fw-bold text-primary">By Category</small><div class="d-flex"><label class="fw-bolder me-1 mt-2">Filter:</label> <input class="form-control resetSearch"id="filterDepartment"></div></div><div class="col-md-1 text-md-center"><a class="btn btn-sm btn-outline-danger mt-3 mt-md-4 d-md-block d-none"href="department"type="button">Reset</a> <a class="btn btn-sm btn-outline-danger mt-3 mt-md-4 d-md-none"href="department"type="button">Reset</a></div></div><div class="row"><div class="col-md-12"><div class="table-responsive"id="showDataDept"><table class="table table-hover"><thead><tr class="text-center"><th>No.</th><th>Department</th><th>Options</th></tr></thead><tbody><?php 

class ViewDepartmentRecords{
	private $records;

	public function __construct($records){
		$this->records = $records;	
	}

	public function displayRecords(){

		$ctr = 1;
		while ($row = $this->records->fetch_assoc()) {
	?><tr class="text-center"><td><?= $ctr ?></td><td><?= $row["department"] ?></td><td><a class="btn btn-sm btn-outline-primary edit-deptdata"href="#"type="button"data-bs-target="#modalUpdateDept"data-bs-toggle="modal"id="<?= $row['dept_id'] ?>">Update</a> <a class="btn btn-sm btn-outline-danger del-deptdata"href="#"type="button"data-bs-target="#modalDelDept"data-bs-toggle="modal"id="<?= $row['dept_id'] ?>">Delete</a></td></tr><?php
$ctr++;	
		}

	}
}

$recordsManager = new DepartmentManager($conn);
$records = $recordsManager->getDepartment();

$viewRecords = new ViewDepartmentRecords($records);
$viewRecords->displayRecords();

?></tbody></table></div></div></div></div></section><?php
	require_once "../template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?></body></html>