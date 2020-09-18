<?php
	include('connect.php');
	
	$id = $_POST['id'];
	$employee = $_POST['emp-name'];
	$position = $_POST['position'];
	$dept = $_POST['department'];
	
	$period = $_POST['period'];
	$month1 = $_POST['month1'];
	$date1 = $_POST['date1'];
	$month2 = $_POST['month2'];
	$date2 = $_POST['date2'];
	
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
	
	
	echo "</br>";
	
	$cut =  $month1." ".$date1." - ".$month2." ".$date2;
		
	echo "</br>";
	echo " $id</br>";
	echo " $employee</br>";
	echo " $position</br>";
	echo " $dept</br>";
	echo " $cut</br>";
	 echo " $period</br>";
	 
	echo "$hour </br>"; 
	 echo "$rate </br>";
	 echo "$absent</br>";
	 echo "$tax</br>";
	 echo "$holiday</br>";
	echo "$sss </br>";
	echo " $allowance </br>";
	echo "$ibig</br>";
	echo "$overtime</br>";
	echo "$advance</br>";
	echo "$adjustments</br>";
	echo "$uniform</br>";
	echo "$late </br>";
	echo "$canteen</br>";
	 
	 $hol = $holiday * $rate;
	 $perDay = $hour * $rate;
	 $ot = $rate * $overtime;
	 
	 $Pay = $perDay + $allowance + $adjustments + $hol + $ot;
	 $gross = $Pay - $late;
	 
	 $day = $hour / 8;
	 
	 $deduction = $tax + $sss + $ibig + $advance + $uniform + $canteen;
	$totalNetpay = $gross - $deduction;
	
	 echo " $gross</br>";
 	 echo " $day</br>";
	 echo " $totalNetpay</br>";
	echo " $deduction</br>";
	 
	 $sql = "Insert into record (id,name,position,dept,period,NoDays,rate,absences,allowance,holiday,overtime,adjustments,lates,grosspay,tax,
	 sss,philhealth,pagibig,advances,uniform,canteen,deduction,netpay) VALUES ('$id','$employee','$position','$dept','$period','$day',
	 '$rate','$absent','$allowance','$holiday','$overtime','$adjustments','$late','$gross','$tax','$sss','$philhealth','$ibig',
	 '$advance','$uniform','$canteen','$deduction','$totalNetpay')";
	 
	 
	$result = mysqli_query($conn,$sql);
		if(!$result){
			echo " could not insert";
	}
	}
?>