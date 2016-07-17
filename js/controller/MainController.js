app.controller('MainController', function($scope, $http) {
	$scope.result = [];
	$http.get('http://pmb.bem.unsri.ac.id/api.php')
	.success(function(data) {
		$scope.result = data;
	});
});

app.controller('MainController2', function($scope, $http) {
	$scope.result = [];
	$http.get('http://pmb.bem.unsri.ac.id/api2.php')
	.success(function(data) {
		$scope.result = data;
	});
});

app.filter('searchFor', function() {
	return function(arr, searchString) {
		if (!searchString) {
			return arr;
		}
		var result = [];
		searchString = searchString.toLowerCase();
		angular.forEach(arr, function(item) {
			if ((item.nama).toLowerCase().indexOf(searchString) !== -1) {
				result.push(item);
			}
		});
		return result;
	};
});