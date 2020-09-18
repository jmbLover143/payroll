<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yaramay Payslip System</title>
		<link rel="icon" href="img/yaramay.png">
		<link rel="icon" href="logo5.png">
			<link href="design.css" rel="stylesheet" type="text/css">
			<script src="printcontent.js"></script>
    </head>	
    </body>
	<?php
	include('connect.php');
	$id = $_POST['id'];
	$employee = $_POST['emp-name'];
	$position = $_POST['position'];
	$dept = $_POST['department'];
	$period = $_POST['period'];
	 $hour = $_POST['hour'];
	$rate = $_POST['rate'];
	$absent = $_POST['absent'];
	$tax = $_POST['tax'];
	$holiday = $_POST['holiday'];
	$sss = $_POST['sss'];
	$allowance = $_POST['allowance'];
	$ibig = $_POST['pag-ibig'];
	$overtime = $_POST['overtime'];
	$advance = $_POST['advance'];
	$adjustments = $_POST['adjustments'];
	$uniform = $_POST['uniform'];
	$late = $_POST['late'];
	$canteen = $_POST['canteen'];
	$philhealth = $_POST['philhealth'];
	 
	 $hol = $holiday * $rate;
	 $perDay = $hour * $rate;
	 $ot = $rate * $overtime;
	 $Pay = $perDay + $allowance + $adjustments + $hol + $ot;
	 $gross = $Pay - $late;
	 $day = $hour / 8;
	 $deduction = $tax + $sss + $ibig + $advance + $uniform + $canteen + $philhealth;
	$totalNetpay = $gross - $deduction;
	$date = date('m/d/Y');
      if($id == "" || $id == null || $employee == "" || $employee == null || $dept == "" || $dept == null || $position == "" || $position == null || $hour == "" || $hour == null || $rate == "" || $rate == null || $absent == "" || $absent == null ||$tax == "" || $tax == null || $holiday == "" || $holiday == null || $sss == "" || $sss == null ||$allowance == "" || $allowance == null || $ibig == "" || $ibig == null ||  $overtime == "" || $overtime == null ||$advance == "" || $advance == null || $adjustments == "" || $adjustments == null || $uniform == "" || $uniform == null ||$late == "" || $late == null || $canteen == "" || $canteen == null || $philhealth == "" || $philhealth == null){
		header('Location: error.php');

	  }else{
	 $sql = "Insert into record (id,name,position,dept,period,NoDays,rate,absences,allowance,holiday,overtime,adjustments,lates,grosspay,tax,
	 sss,philhealth,pagibig,advances,uniform,canteen,deduction,netpay,date) VALUES ('$id','$employee','$position','$dept','$period','$day',
	 '$rate','$absent','$allowance','$holiday','$overtime','$adjustments','$late','$gross','$tax','$sss','$philhealth','$ibig',
	 '$advance','$uniform','$canteen','$deduction','$totalNetpay','$date')";
	 
	 
	$result = mysqli_query($conn,$sql);
		if(!$result){
			echo " could not insert";
	}
	
	  }
	?>
	
	<div id="slip">
	<br/>
	<div class="container">
			<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>YARAMAY</h1></u>
				<h3>COMPUTER MAINTENANCE SERVICES</h3>
				</b>
		</div><center>		
			<div class="layout">
			<h1 style="font-family:algerian">Payslip</h1>
			</div>
			<div>
				<table class="head">
				<tr>
						<td><b>Employee ID:</b></td><td><input value="<?php echo $id ?>"><input type="hidden" value="<?php echo date('m/d/Y')?>"></td>
					</tr>
				
					<tr>
						<td> Employee Name: </td><td><input value="<?php echo $employee ?>" style="width:200px"/></td>
					</tr>
					<tr>
						<td> Position: </td><td><input value="<?php echo $position ?>"></td>
					</tr>
					<tr>
						<td> Department: </td><td><input value="<?php echo $dept ?>"></td>
					</tr>
					<tr>
						<td> Pay Period: </td><td><input value="<?php echo $period ?>"></td>
					</tr>
					
					
				</table>
			</div>
			<BR/>
			 
			<table class="head">
				<tr>
					<td><u><b>EARNINGS</b></u> </td> 
				</tr>
			 <table class="head">
				<tr>
						<td> No. of Days: </td><td><input value="<?php echo $day ?>"></td>
					</tr>
								<tr>
						<td> Total hours: </td><td><input value="<?php echo $hour ?>"></td>
					</tr>
					<tr>
						<td>Rate: </td><td><input value="<?php echo $rate ?> pesos per hour" style="width:190px"/></td>
					</tr>
					<tr>
						<td> Absences: </td><td><input value="<?php echo $absent ?>"></td>
					</tr>
					<tr>
						<td> Salary & Wages: </td><td><input value="<?php echo $perDay ?>"></td>
					</tr>
					<tr>
						<td> Allowance: </td><td><input value="<?php echo $allowance ?>"></td>
					</tr>
						<tr>
						<td> Holiday hours: </td><td><input value="<?php echo $holiday ?>"></td>
					</tr>
					<tr>
						<td> Overtime: </td><td><input value="<?php echo $overtime ?>"></td>
					</tr>
					<tr>
						<td> Adjustments: </td><td><input value="<?php echo $adjustments ?>"></td>
					</tr>
					<tr>
						<td> Lates: </td><td><input value="- <?php echo $late ?> minutes"></td>
					</tr>
					<tr>
						<td> <b>GROSS PAY:</b> </td><td><u><input style="" value="<?php echo $gross ?>"></u></td>
					</tr>
					
					
					
				</table>
			</table>
				<div style="margin-left: 400px;margin-top:-325px;">
								<table >
				<tr>
					<td><u><b>DEDUCTIONS</b></u></td> 
				</tr>
			 <table>
				<tr>
						<td> W/Tax: </td><td><input value="<?php echo $tax ?>"></td>
					</tr>
				
					<tr>
						<td>SSS Contri: </td><td><input value="<?php echo $sss ?>" style="width:190px"/></td>
					</tr>
					<tr>
						<td>Philhealth: </td><td><input value="<?php echo $philhealth ?>"></td>
					</tr>
					<tr>
						<td>Pag-ibig:</td><td><input value="<?php echo $ibig ?>"></td>
					</tr>
					<tr>
						<td> Advances: </td><td><input value="<?php echo $advance ?>"></td>
					</tr>
						<tr>
						<td>Uniform: </td><td><input value="<?php echo $uniform ?>"></td>
					</tr>
					<tr>
						<td>Canteen: </td><td><input value="<?php echo $canteen ?>"></td>
					</tr>
					<tr>
						<td><b> Total Deduction:</b> </td><td><input value="<?php echo $deduction ?>"></td>
					</tr>
					 
					<tr>
						<td> <b>NET PAY:</b> </td><td><input value="<?php echo $totalNetpay ?>"></td>
					</tr>
					
					
					
				</table>
				<tr></tr>
			</table>
			<tr>
					<td><br/><br/>Prepared by: ______________________</td>
				</tr>
				</div>
				
				<table style="margin-left: -350px;margin-top: -20px;">
				<tr>
					<td>Received by: ______________________</td>
				</tr>
				<tr>
					<td>Date: ______________________</td>
				</tr>
			</table><br/>
				<div class="foot">
					 
				</div>
				<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>YARAMAY</h1></u>
				<h3>COMPUTER MAINTENANCE SERVICES</h3>
				</b>
		</div>
			 
		<center>		
		
				<table class="head">
				<tr>
						<td><b>Employee ID:</b></td><td><input value="<?php echo $id ?>"></td>
					</tr>
				
					<tr>
						<td> Employee Name: </td><td><input value="<?php echo $employee ?>" style="width:200px"/></td>
					</tr>
					 
				</table>
				
				
		</div>
		</div>
		<center><button onclick="printContent('slip')">PRINT PAYSLIP</button> 
		 <a href="index.php"><button>NEW</button><a></center>
    </body>
</html>












