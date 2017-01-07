<!DOCTYPE html>
<html ng-app="tarefas">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Lista de tarefas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container" ng-controller="TarefasController as tarefas">
  <div class="page-header"><h2>Minha lista de tarefas</h2></div>

  <form ng-submit="adicionarTarefa()">
    <label for="texto">Tarefa</label>
    <input id="texto" type="text" ng-model="texto" required placeholder="Texto" class="form-control"/>
    <label for="autor">Autor</label>
    <input id="autor" type="text" ng-model="autor" required placeholder="Autor" class="form-control"/>
    <label for="status">Status</label>
    <select id="status" ng-model="status" required class="form-control">
      <option value="Concluído">Concluído</option>
      <option value="Pendente">Pendente</option>
    </select>
    <input type="submit" value="Cadastrar" class="btn btn-default"/>
  </form>

  <!-- Use o código a seguir para substituir a tabela e ter um layout mobyle first. -->
  <!--
  <style>
  .even{background-color: #EFEFEF;}
  .odd{background-color: #DDDDDD;}
  .header{text-align: center;}
  </style>
  <div class="containner">
    <div class="row" ng-repeat="tarefa in dadostarefas" ng-class-odd="'odd'" ng-class-even="'even'">
      <div class="col-sm-1"><span ng-click="excluirTarefa(tarefa.id)" class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
      <div class="col-sm-3">{{tarefa.texto}}</div>
      <div class="col-sm-3">{{tarefa.autor}}</div>
      <div class="col-sm-3">{{tarefa.status}}</div>
      <div class="col-sm-2">
        <span ng-if="tarefa.status == 'Concluído'">
          <input type="button" value="Marcar como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id,'Pendente')" />
        </span>
        <span ng-if="tarefa.status != 'Concluído'">
          <input type="button" value="Marcar como Concluído" class="btn btn-warning" ng-click="mudarStatus(tarefa.id,'Concluído')" />
        </span>
      </div>
    </div>
  </div>
  -->

  <!-- Use o código a seguir para ter um layout desktop first. -->
  <table class="table table-striped">
    <thead><tr><th>X</th><th>Tarefa</th><th>Autor</th><th>Status</th><th>Alterar</th></tr></thead>
    <tbody>
      <tr ng-repeat="tarefa in dadostarefas">
        <td><span ng-click="excluirTarefa(tarefa.id)" class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
        <td>{{tarefa.texto}}</td>
        <td>{{tarefa.autor}}</td>
        <td>{{tarefa.status}}</td>
        <td width='10%'>
          <span ng-if="tarefa.status == 'Concluído'">
            <input type="button" value="Marcar como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id,'Pendente')" />
          </span>
          <span ng-if="tarefa.status != 'Concluído'">
            <input type="button" value="Marcar como Concluído" class="btn btn-warning" ng-click="mudarStatus(tarefa.id,'Concluído')" />
          </span>
        </td>
      </tr>
    </tbody>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
