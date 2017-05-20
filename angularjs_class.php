<!doctype html>
<html ng-app="myApp" >
<head>
  
<meta charset="utf-8" >
<title> Angular practice </title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/app.js"></script>
</head>
<body >

	<div ng-controller="HomeController">
    
    
    	<p>{{message}}</p>
        
        <!--ng-repeat using Array-->
        
        <ul>
        	<!-- First alias than ARRAY OR OBJECT name | order by come here then | Filter By -->
        	<li ng-repeat="user in users">
            	{{user}}
            </li>
        </ul>
        
         <!--ng-repeat using Array -->
         
         <!--ng-repeat using Array of OBJECT-->
        
        <ul>
        	<li ng-repeat="student in students">
            	Name : {{student.Fname + " " + student.Lname}} <br />
                Age  : {{student.Age}}
            </li>
            
        </ul>
        
         <!--ng-repeat using Array of OBJECT -->
         
         
        
        <!-- Adding -->
        
        {{add[0] + add[2]}}
                
        <!-- Adding -->
        
    </div>
<!-- Two Way Data Binding -->

	<p>	Write Your Name Here : 
    	<input type="text" ng-model="name" placeholder="Enter name here">
    </p>
	<h1>
    	My Name Is {{name}}
    </h1>
 <!-- Two Way Data Binding -->
</body>
</html>
