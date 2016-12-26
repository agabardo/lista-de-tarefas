<!DOCTYPE html>
<html ng-app="tarefas">
<head>
  <meta charset="UTF-8">
  <title>Minha Lista de tarefas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container" ng-controller="TarefasController as tarefas">
  <div class="page-header"><h2>Minha lista de tarefas</h2></div>
  <table class="table table-striped">
    <thead><tr><th>Tarefa</th><th>Autor</th><th>Status</th></tr></thead>
    <tr ng-repeat="tarefa in dadostarefas">
      <td>{{tarefa.texto}}</td>
      <td>{{tarefa.autor}}</td>
      <td>{{tarefa.status}}</td>
    </tr>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
