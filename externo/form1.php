<html lang="pt">
<head>
<?php
include "include/header.php";
?>
</head>

<body>
<?php
//include "include/navbar.php";
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1><img src="include/image/IMMERJ_LOGO_NAVBAR.png" alt="IMMERJ LOGO" width="125" height="35"></h1>
      </div>

    </main>
<div class="container">
<form action="/">
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Full Name</label>
		<div class="col-10">
		<input name= "g_full_name" class="form-control" type="text"  id="Full Name">
		</div>
	</div>
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Age</label>
		<div class="col-10">
		<input name= "g_age" class="form-control" type="text"  id="Age">
		</div>
	</div>
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Contact</label>
		<div class="col-10">
		<input name="g_contact" class="form-control" type="text"  id="Contact">
		</div>
		<small id="emailHelp" class="col-xs-12 col-sm-6 col-lg-8 col-form-label form-text text-muted">It can be the contact of the institution that will accept you.</small>
	</div>
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Home Country</label>
		<div class="col-10">
		<input name="g_home_country" class="form-control" type="text"  id="home_country">
		</div>
	</div>
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Immigration Cause</label>
		<div class="col-10">
		<input name="g_immigration_cause" class="form-control" type="text" id="immigration_cause">
		</div>
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Notes</label>
		<textarea name="g_notes" class="form-control" id="exampleTextarea" rows="3"></textarea>
	  </div>
	<div class="form-group">
		<label for="exampleInputFile">Upload File</label>
		<input name="g_upload_file" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
		<small id="fileHelp" class="form-text text-muted">Add the image.</small>
	</div>
	
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include "include/footer.php";
?>
</body>
<?php
include "include/endjs.php";
?>
</html>