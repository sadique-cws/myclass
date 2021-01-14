<?php include"config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    	<div class="container">
    		<a href="#" class="navbar-brand">CWS</a>
			
			<ul class="navbar-nav">
				<li class="nav-list"><a href="#" class="nav-link">Home</a></li>
				<li class="nav-list"><a href="#" class="nav-link">logIn</a></li>
			</ul>
    	</div>
    </nav>
    <div class="container mt-4">
    	<div class="row">
    		<div class="col-lg-4 mx-auto">
    			<div class="card">
    				<div class="card-header bg-secondary">Insert Data</div>
					<div class="card-body">
						<form action="apply.php" method="post">
							<div class="mb-3">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control">
							</div>
						</form>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>