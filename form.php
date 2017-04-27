<?php
	include ("session.php");
	$checkboxes = array();



	// Fill
	for ($x = 0; $x <= 35; $x++) {
	  if (isset($_POST['checkbox'.$x])) {
	    $checkboxes[$x] = 'x';
	  }
	  else {
	    $checkboxes[$x] = 0;
	  }
	}

	for ($i = 0; $i <= 35 ; $i++) {
	  echo $checkboxes[$i];
	}

	for ($j = 0; $j <= 35 ; $j++) {
		$checkboxes[$j] = 0;
	}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
	<title>Checklist for Bachelor of Arts in Information Technology</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
	<h1>Checklist for your IT courses</h1>
	<h4>MAJOR COURSES</h4>
  <form action="form.php" method="post">
		<?php


		echo ';<div class="checkbox col-sm-offset-1">
			<label><input type="checkbox" name="checkbox1" value="x">MATH 140 Elementary Statistics</label><br>
			</div>'
		?>
  	<!-- <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox1" value="x">MATH 140 Elementary Statistics</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox2" value="x">BUSN 201 Principles of Economics I</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox3" value="x">BUSN 210 Principles of Management</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox4" value="x">BUSN 211 Accounting Principles I </label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox5" value="x">BUSN 305 Principles of Marketing</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox6" value="x">BUSN 322 Principles of Finance</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox7" value="x">BUSN 325 Professional Communication</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox8" value="x">BUSN 403 Business Law and Ethics </label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox9" value="x">MATH 220 Discrete Math</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox10" value="x">CISC 105 Problem Solvoing and Algorithms</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox11" value="x">CISC 200 Mgmt Info Systems &amp; Sys Analysis</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox12" value="x">CISC 215 Database Management</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox13" value="x">CISC 310 Networking Fundamentals</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox14" value="x">CISC 325 Information Assurance</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox15" value="x">CISC 330 Software Engineering</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox16" value="x">CISC 322 Electronic Commerce</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox17" value="x">CISC 375 Web Design</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox18" value="x">CISC xxx Enterprise Resource Planning Systems</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox19" value="x">CISC xxx Systems Administration</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox20" value="x">CISC 442 Information Technology</label><br>
  	</div>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox21" value="x">BUSN 352 Business Service-Learning Practicum</label><br>
  	</div>
  	<h4>GENERAL EDUCATION CORE</h4>
    <h5>College Success Skills (1 hour)</h5>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox22" value="x">OREN 105 or OREN 106</label><br>
  	</div>
    <h5>Communication (6 hours Composition and 3 hours Speech required)</h5>
  	<div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox23" value="x">ENGL 110 or validation by ACT/SAT</label><br>
  	</div>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox24" value="x">ENGL 111 or ENGH 111 or validation by ACT/SAT</label><br>
  	</div>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox25" value="x">*SPCH 101 (Public Speaking or interpersonal and/or small group speech)</label><br>
  	</div>
    <h5>Mathematics (3 hours Statistics or higher)</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox26" value="x">*MATH 140 or a higher level math (*MATH 140 is required in BUSN core)</label><br>
  	</div>
    <h5>Arts and Humanities (6 hours - 3 hours must be in literature)</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox27" value="x">Literature: ENGL 201, 204, 205, 217, 219, 223, 224, 225, 227, 228, 231, 250</label><br>
  	</div>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox28" value="x">Fine Arts and Humanities: ARTS 110, 204, 208; ENGL 120, HNRS 101, </label><br>
  	</div>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox29" value="x">HUMA 222, 223; MUSC 101, RELG 101, 102, 201, 230; THEA 104</label><br>
  	</div>
    <h5>Natural Science (4 hours - lab required)</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox30" value="x">BIOL 105, 110, 120, 251, 252; CHEM 101, 102; EVSC 111, GEOL 101, NSCI 105, PHYS 201, 202</label><br>
  	</div>
    <h5>Behavioral Wellness &amp; Social Sciences (6 hours; may use only 3 credits from the wellness area)</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox31" value="x">Social Science: *BUSN 201, *202; GEOG 200, POLS 110, 210, 220, 230</label><br>
  	</div>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox32" value="x">PSYC 101, 206, 299; SOCI 101, 105</label><br>
  	</div>
    <p>BUSN 201 and BUSN 202 are required in the Business core.</p>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox33" value="x">Wellness: PHED 201, PSYC 102</label><br>
  	</div>
    <h5>History (6 hours)</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox34" value="x">HIST 101, 102, 201, 202, HIST/POLS 280</label><br>
  	</div>
    <h5>Religion (3 hours) - Must be a different religion course if used above to
  satisfy a requirement in the Arts and Humanities core</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox35" value="x">RELG 101, 102, 230 </label><br>
  	</div>
    <h5>Civic Studies (3 hours) - Must be a different POLS course if used above.</h5>
    <div class="checkbox col-sm-offset-1">
  		<label><input type="checkbox" name="checkbox36" value="x" s[35] == 'x') echo "checked='checked'"; ?>>CIVS 251, CRJU 105, POLS 110, 210, 220, 230</label><br>
  	</div>
    <h5>Arts and Lecture Series (no credit hours)</h5>
		<input type="submit" name="submit" value="Submit" /> -->
  </form>
</div>
</body>
</html>
