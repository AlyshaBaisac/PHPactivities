<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Login</title>
</head>
<body>
			<!-- 
			USER TYPE  - employee_user  -  employee_pass
			Admin      - admin     -  Pass1234
			Admin      - renmark   -  Pogi1234
			ContentM.  - pepito    -  manaloto
			ContentM.  - juan      -  delacruz
			System User- pedro     -  penduko
			-->
	<?php
		$error_message = 'invalid';

		if (isset($_POST['btn_login'])) {
			$employee_user = $_POST['employee_user'];
			$employee_pass = $_POST['employee_pass'];

			if ($_POST['Occupation'] == 'admin') {
				if (($employee_user == 'admin' AND $employee_pass == 'Pass1234') OR ($employee_user == 'renmark' AND $employee_pass == 'Pogi1234')) {
					$error_message = 'success';
				}
			}elseif ($_POST['Occupation'] == 'contentmanager') {
				if (($employee_user == 'pepito' AND $employee_pass == 'manaloto') OR ($employee_user == 'juan' AND $employee_pass == 'delacruz')) {
					$error_message = 'success';
				}
			}elseif($_POST['Occupation'] == 'systemuser'){
				if ($employee_user == 'pedro' AND $employee_pass == 'penduko'){
					$error_message = 'success';
				}
			
			}
		}
	  ?>
	  
  	<div style=""></div>
		</div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="image/icon.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="justify-content-center login_container">
							<select name="Occupation" class=" d-flex login_container login_btn">
				    		<option value="admin">Admin</option>
				    		<option value="contentmanager">Content Manager</option>
				    		<option value="systemuser">System User</option>
				    	</select>
						<input type="text" name="employeeUser" placeholder="User Name" autocomplete="off" class="login_btn">
				        <input type="password" name="employee_pass" placeholder="Password" id="pass" autocomplete="off" class="login_btn">
				        <input type="submit" name="btn_login" value="Sign In" class="btn login_btn ">	
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
						<button type="button" name="button" class="btn login_btn">Login</button>
				 		</div>
					</form>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>