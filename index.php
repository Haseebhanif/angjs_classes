<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <body>

<script type="text/javascript">

	var numeric = [1,2,3,4,5,6,7,8,9,10 ];
	var addTwoValues =  numeric[4] + numeric[8] ;
	//var num =  numeric.indexOf(7);	
	
	// Map And Filter
		new_numeric = numeric.map(function(val){
			return val * 2;
		}).map(function(val){
			return val + 1;
		}).filter(function(val){
			return val>=10 ;
		});

		
		console.log(new_numeric);
		
		// filtered 
		//var doubleValue = [11,2,33,4,55,6,77,8,99,10 ];
		//var filter = doubleValue.filter(function(val){
			//return val>=10 ;
		//});
		
	var d = Date();
	var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday" ];
	var today = weekday[d.getDay()];
    document.write("Today Is " + today + "<br />");
	
	//Switch Condition
	switch (d.getDay()) {
    case 0:
        day = weekday[0];
        break;
    case 1:
        day = weekday[1];
        break;
    case 2:
        day = weekday[2];
        break;
    case 3:
        day = weekday[3];
        break;
    case 4:
        day = weekday[4];
        break;
    case 5:
        day = weekday[5];
        break;
    case 6:
        day = weekday[6];
 		break;
    default : "Please Check Your Date & Time"
}  

// If/elseif/else Condition

if (today == weekday[0]) {
        document.write("Have a Nice " + weekday[0]);
    }else if(today == weekday[1]) {
        document.write("Have a Nice " + weekday[1]);
    }else if(today == weekday[2]) { 
        document.write("Have a Nice " + weekday[2]);
    }else if(today == weekday[3]) {
        document.write("Have a Nice " + weekday[3]);
    }else if(today == weekday[4]) {
        document.write("Have a Nice " + weekday[4]);
    }else if(today == weekday[5]) {
        document.write("Have a Nice " + weekday[5]);
    }else if(today == weekday[6]) {
        document.write("Have a Nice " + weekday[6]);
    }else {
		document.write("Please Check Your Date & Time")
		}
		
		
		
// ternary Condition Or ?; 
	var greeting = "Good" + ((d.getHours() > 17) ? " evening" : " day");	
</script>

</body>
</html>