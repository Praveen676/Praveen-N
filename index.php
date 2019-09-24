<!DOCTYPE html>
<html>
<head>
	<title>Employee Registry Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="border">
		<h2>Registration Form</h2>
		<div class="card" align="center">
			<form action="form.php" method="post">
				<table>
					<tr>
						<td align="right">Employee Name </td><td>:</td> <td><input class="res" type="text" name="e_name" placeholder="Enter Your Name.."></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Please Enter Your Name..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee D.O.B </td><td>:</td> <td><input class="res" name="dob" type="date"></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Please Enter Your Date Of Birth..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee Mobile No </td><td>:</td> <td><input class="res" type="text" name="P_num" placeholder="Enter Your Mobile No.."></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Please Enter Your Mobile No..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee Email ID </td><td>:</td> <td><input class="res" type="email" name="email" placeholder="Enter Your Mail ID.."></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Please Enter Your Email..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee Address </td><td>:</td> <td><textarea class="res" type="text" name="address" placeholder="Address.."></textarea></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Enter Your Feedback..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee Blood Group </td><td>:</td> <td><input class="res" name="bgroup" type="text"></td>
						<td>
							<div class="tooltip"><img src="info.png" height="20px" width="20px">
							  <span class="tooltiptext">Please Enter Your Blood Group..</span>
							</div>
						</td>
					</tr>
					<tr>
						<td align="right">Employee Expirence </td><td>:</td>
						<td><select class="res" name="select1">
							<option>Select Expirence</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
			`				<option>4</option>
							<option>5</option>
							</select></td>
					</tr>
					<tr>
						<td align="right">Employee Qualification </td><td>:</td> 
						<td><select class="res" name="select2">
							<option>Select Qualification</option>
							<option>B.E</option>
							<option>B.Sc</option>
							<option>B.Tech</option>
							<option>M.E</option>
							<option>MCA</option>
							<option>MBA</option>
							</select></td>
					</tr>
				</table>
				<br>
				<br>
						<input type="submit" value="Submit">
						<input type="reset" value="Reset">
			</form>
		</div>
	</div>
</body>
</html>