const myApp = angular.module("myApp", []);

myApp.factory("alertService", [
	"$window",
	function (win) {
		return function (msg) {
			if (msg) {
				win.alert(msg);
            return;
			}

         win.alert('alert empty string')
		};
	},
]);

myApp.controller("PostController", [
	"$scope",
	"$http",
	"alertService",
	function ($scope, $http, alertService) {
		$scope.test = "hello from angular";
		$scope.alert = alertService;
		$scope.info = {
			name: "Hao",
			age: 22,
		};
		$http
			.get("http://localhost/learn-codeigniter-angularjs/index.php/api/v1/post")
			.then((result) => {
				$scope.data = result.data;
				console.log($scope.data);
			});
	},
]);

myApp.directive("myBasicTemplate", function () {
	return {
      restrict: 'A',
		template: "Name: {{info.name}}, Age: {{info.age}}",
	};
});


