var myApp = 
	angular.module
			('myApp', []);
			

myApp.controller('HomeController', function($scope){
	
	$scope.message = "how are u ?";
	
	$scope.users = ['Haseeb', 'Altamash', 'Irfan'];
	
	$scope.add = [10, 20, 30];
	
	// students Data //
	 $scope.students  = [
	 	{
		  Fname: "Haseeb",
		  Lname: "Hanif",
		  Age: 23
			
		},
		{
		  Fname: "Altamash",
		  Lname: "Akhter",
		  Age: 22
		},
		{
		  Fname: "Irfan",
		  Lname: "Ali",
		  Age: 25
		},
		{
		  Fname: "Shahrukh",
		  Lname: "Ali",
		  Age: 28
		},
	 ];

// students  Data  End//
	
	})
	