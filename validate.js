function valid() {
    var id = document.getElementById("id").value;
    var name = document.getElementById("emp-name").value;
	var dept = document.getElementById("department").value;
    var position = document.getElementById("position").value;
		
	var hour = document.getElementById("hour").value;
	var rate = document.getElementById("rate").value;
	var absent = document.getElementById("absent").value;
	var tax = document.getElementById("tax").value;
	var holiday = document.getElementById("holiday").value;
	var sss = document.getElementById("sss").value;
	var allowance = document.getElementById("allowance").value;
	var pag-ibig = document.getElementById("pag-ibig").value;
	var overtime = document.getElementById("overtime").value;
	var advance = document.getElementById("advance").value;
	var adjustments = document.getElementById("adjustments").value;
	var uniform = document.getElementById("uniform").value;
	var late = document.getElementById("late").value;
	var canteen = document.getElementById("canteen").value;
	var philhealth = document.getElementById("philhealth").value;
      if(id == "" || id == null || name == "" || name == null || dept == "" || dept == null || position == "" || position == null  ){
          alert("Please fill all required input(s)");
          return false;
      }else{
		  alert("Success ready to print.")
		  
	  }

}

function validate(){
 
    var id = document.getElementById("id").value;
    var name = document.getElementById("emp-name").value;
	var dept = document.getElementById("department").value;
    var position = document.getElementById("position").value;
	
	     if(id == "" || id == null || name == "" || name == null || dept == "" || dept == null || position == "" || position == null  ){
          alert("Please fill all required input(s)");
          return false;
      }else{
		  alert("Success ready to print.")
		  
	  }

}	

