<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

	</head>
	
<body>
	<nav class="navbar navbar-default">
		<center><h4>Welcome to AFREETECH ASSURANCES</h4></center>
	
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add client</button>
			<a href="view/view.php"><button type="button" class="btn btn-primary" >view client</button></a>
			<br />
			<br />
			
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" >
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group">
								
							<div class="form-group">
								<label>name</label>
								<input type="text" class="form-control" name="name" required/>
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="date" class="form-control" name="dob" required/>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" required/>
							</div>
							<div class="form-group">
								<label>Assurances type</label>
								<input type="text" class="form-control" name="assurances" required/>
							</div>
							<div class="form-group">
								<label>Agency</label>
								<!--input type="text" class="form-control" name="agency" required/-->
								<select  name="agency" class="form-group">
									<option value="INTIA-Daoula">INTIA-Daoula</option>
									<option value="INTIA-Yaounde">INTIA-Yaounde</option>
								</select>
							</div>


							
						
							
						
						
						
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>