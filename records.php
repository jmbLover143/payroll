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
		<link href="front.css" rel="stylesheet" type="text/css">
		<script src="reserved_validate.js"></script>
    </head>
    <style>
		</style>
    
    <body>
 
			<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>YARAMAY</h1></u>
				<h3>COMPUTER MAINTENANCE SERVICES</h3>
				</b>
		</div><center>
		<div class="container">
		 	<div class="recordhead">
				<h2>ALL RECORDS WITH DATE</h2>
			
			</div>
			<div class="box">
<table class="box2">
    
    <tr class="hold">
         
        <td class="">EMPLOYEE ID</td>
        <td class="namestyle">EMPLOYEE NAME</td>
		<td class="">POSITION</td>
		<td class="">DEPARTMENT</td>
		<td class="">GROSS PAY</td>
		<td class="">NET PAY</td>
    </tr>


    <br/>
	<?php 
	 include('connect.php');
	  
	$sql = "SELECT id,name,position,dept,grosspay,netpay from record where date = '$_REQUEST[date]' order by name"	;
	$result = $conn ->query($sql);

            if($result ->num_rows > 0){
                while( $row = $result ->fetch_assoc()){
                echo "<tr>
                        
                        <td class='font'><b>" . $row['id'] . "</b></td>								
						<td class='font'><b>" . $row['name'] . "</b></td>
						<td class='font'><b>" . $row['position'] . "</b></td>
						<td class='font'><b>" . $row['dept'] . "</b></td>
						<td class='font'><b>" . $row['grosspay'] . "</b></td>
						<td class='font'><b>" . $row['netpay'] . "</b></td>
                        </tr>";
            }
        }

	
	
	?>

</table>
</div>
<div class="footer2">
		<table class="">
			<tr>
		<td> </td><td></td><td></td><td></td><td><a href="index.php"><button >BACK</button></td></a><td> </td>
			</tr>
					</table>
		
		</form>
		
 	
		</div>
		</div>
    </body>
</html>












