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
		
			
        <form action="print_payslip.php" method="POST" onsubmit="return valid()">
		<div class="head">
		
             <table class="adjust">
					<tr>
						<td><b>Employee ID Number</b></td><td></td><td><input type="text" id="id" name="id" class="head-input"/></td>
					</tr>
					
						<tr>
						<td><b>Employee Name</b></td><td></td><td><input type="text" value=" " id="emp-name" name="emp-name" class="head-input"/></td>
					</tr>
					<tr>
						<td><b>Position</b></td><td></td><td><input type="text" name="position" id="position" class="head-input"/></td>
					</tr>
						<tr>
						<td><b>Department</b></td><td></td><td><input type="text" name="department" id="department" class="head-input"/></td>
					</tr>			 
			 </table>
			 
        <div><br/>
		<table class="adjust">
					<tr>
						<td><b>Pay Period</b></td><td></td>
						<td><select name="period" id="period" style=" ">
								<option>Weekly</option>
								<option>2nd Week</option>
								<option>Monthly</option>
							</select></td><td></td>
					 
							
							</td>
							
							<td></td><td></td><td></td><td></td><td></td><td><b>Today:</b> <?php echo date('m/d/Y')?></td>	
					</tr>
	
		</table>
		<div class="inner-body">
		<table class="adjust" style="margin-top: 10px;padding: 0px;">
				<tr >
					<td><b>DESCRIPTION</b></td>
					<td><b>HOURS</b></td>
					<td><b>RATE PER HOUR</b></td>
					<td><b>DESCRIPTION</b></td>
					<td><b>&nbspCOUNT(S)</b></td>
					<td><b>DESCRIPTION</b></td>
					<td><b>AMOUNT</b><br/></td>
					
				</tr>
				<tr style="margin-top: 5px">
				<td><br/><input class="size1" value="SALARY" readonly /></td><td><input  min="1" max="200" id="hour" name="hour" type="number" style="margin-top: 18px;text-align: right" class="size2" /></td>
				<td><input id="rate" name="rate" style="margin-top: 18px;text-align: right" min="1" max="150"  class="size3" type="number"/></td>
				<td><input  style="margin-top: 18px" class="size1" value="ABSENTS_DAY"  readonly/></td>
				<td><input min="0" max="30" id="absent" name="absent" style="margin-top: 18px;text-align: right" class="size1" type="number"/></td>
					<td><input style="margin-top: 18px" class="size3" value="W / TAXES" readonly/></td>
				<td><input id="tax" name="tax" style="margin-top: 18px;text-align: right" class="size2" type="number"/></td>
				</td>
				</tr>
				<tr>
					<td></td><td></td><td></td>
				 
				<td><input class="size1" value="HOL_HRS" readonly/></td>
				<td><input id="holiday" name="holiday" style=";text-align: right"  class="size1" type="number"/></td>
					<td><input  class="size3" value="SSS CONTRI" readonly/></td>
				<td><input name="sss" id="sss" style=";text-align: right"  class="size2" type="number" /></td>
				</td>	
				</tr>
				<tr>
					<td></td><td></td><td></td>
				 
				<td><input class="size1" value="ALLOWANCES" readonly/></td>
				<td><input name="allowance" id="allowance" style=";text-align: right"  class="size1" type="number" /></td>
					<td><input  class="size3" value="PAG-IBIG FUND" readonly/></td>
				<td><input name="pag-ibig" id="pag-ibig" style=";text-align: right"  class="size2" type="number" /></td>
				</td>	
				</tr>	
				<tr>
					<td></td><td></td><td></td>
				 
				<td><input class="size1" value="OVERTIME" readonly/></td>
				<td><input min="0" max="100" name="overtime" id="overtime" style=";text-align: right"   class="size1"type="number" /></td>
					<td><input  class="size3" value="ADVANCES" readonly/></td>
				<td><input name="advance" id="advance" style=";text-align: right"  class="size2" type="number"/></td>
				</td>	
				</tr>
				<tr>
					<td></td><td></td><td></td>
				 
				<td><input class="size1" value="ADJUSTMENT" readonly/></td>
				<td><input name="adjustments" id="adjustments" style=";text-align: right"  class="size1" type="number"/></td>
					<td><input  class="size3" value="UNIFORM" readonly/></td>
				<td><input name="uniform" id="uniform" style=";text-align: right"  class="size2" type="number"/></td>
				</td>	
				</tr>
				
				<tr>
					<td></td><td></td><td></td>
				 
				<td><input class="size1" value="LATES" readonly/></td>
				<td><input name="late" id="late" style=";text-align: right"  class="size1" type="number"/></td>
					<td><input  class="size3" value="CANTEEN" readonly/></td>
				<td><input name="canteen" id="canteen" style=";text-align: right"  class="size2" type="number"/></td>
				</td>	
				</tr>
				<tr>
					<td></td><td></td><td></td><td></td><td></td>
				 
				 	<td><input  class="size3" value="PHIL-HEALTH" readonly/></td>
				<td><input name="philhealth" id="philhealth" style=";text-align: right"  class="size2" type="number"/></td>
				</td>	
				</tr>
				<tr style="background-color: #42c8f5;">
					
				</tr>
		</table>
		<div class="footer">
		<table class="footer-line">
			<tr>
		<td><a href="all-records.php"><input class="foot" style="width: 250px;text-align:center; height:28px;margin-top: 5px;background-color:#16f51d;border-color:#16f51d" value="VIEW ALL PAYSLIP RECORDS"></a></td><td></td><td></td><td></td><td><button type="submit" name="submit">PROCEED TO PRINT NOW</button></td><td> </td>
			</tr>
					</table>
		
		</form>
		
 	
		</div>
		</div>
		
		 </div>			
		</div>
    </body>
</html>












