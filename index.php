<?php
 goto MCE87; PVGDJ: require_once "\151\156\x63\x2f\x63\x6f\x6e\x66\x69\x67\56\160\x68\x70"; goto mHocp; mHocp: include "\x63\154\141\163\x73\x2f\x63\x6c\x61\x73\x73\56\160\150\x70"; goto CxPqh; uxxkL: $conn = $dbConn->connectDb(); goto mGwZH; mGwZH: require_once "\x63\157\156\164\x72\x6f\x6c\154\x65\162\x2f\x72\145\161\x75\145\x73\164\x2e\x70\150\x70"; goto EXGmm; CxPqh: require_once "\151\x6e\x63\x2f\163\150\157\167\x61\154\145\162\164\x2e\x70\150\160"; goto Tc11l; Tc11l: $dbConn = new DatabaseConnection($server, $user, $pass, $dbName); goto uxxkL; MCE87: ?>
 
<!doctypehtml><?php  goto PVGDJ; EXGmm: ?>
<html lang="en"><?php require_once "template-parts/head.php"; ?><body><section class="mt-5"id="main"><div class="container"><div class="mb-3 row"><h3 class="fw-bolder text-center text-success">TechEase: Technical Assistance for End-user problems</h3></div><form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"class="row mb-5 needs-validation p-3"method="POST"novalidate><div class="mb-3 col-md-8"><label class="fw-bolder">Requestor Name:</label> <input name="add_req_name"required class="form-control"></div><div class="mb-3 col-md-4"><label class="fw-bolder">Department:</label> <select class="form-control"name="add_department"required><option name="add_department"value=""></option><?php
					$category = new DepartmentCategory($conn);
					$departments = $category->getDepartment();
					foreach ($departments as $department) { ?><option name="add_department"value="<?= $department ?>"><?= $department ?></option><?php	}
					?></select></div><div class="mb-3 col-md-7"><label class="fw-bolder">Product / Model</label> <input name="add_prod_model"required class="form-control"></div><div class="mb-3 col-md-5"><label class="fw-bolder">Date / Time Request</label> <input name="add_date_time"required class="form-control"type="datetime-local"></div><input name="add_status"required type="hidden"value="Pending"><div class="mb-3 col-md-12"><label class="fw-bolder">Problem Description</label> <textarea class="form-control h-100"name="add_prob_desc"required></textarea></div><div class="col-md-12 mt-5"><input name="add_tech"required type="hidden"value="0"> <input name="btnAddRequest"class="btn btn-outline-primary btn-sm"type="submit"value="Submit"></div></form></div></section><?php
	require_once "template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?></body></html>