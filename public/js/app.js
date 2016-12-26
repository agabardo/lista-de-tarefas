(function(){
  var app = angular.module('tarefas',[]);
  app.controller('TarefasController', function($scope, $http){
    $scope.loadData = function () {
	     $http.get('http://localhost:8000/api/tarefas').success(function(data) {
         $scope.dadostarefas = data;
       });
     }
     $scope.loadData();
  });
})();
