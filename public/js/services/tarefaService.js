angular.module('tarefaService', []).factory('Tarefa', function($http) {
  return {
    get : function() {
      return $http.get('/api/tarefas');
    },
    /*
    save : function(DadosTarefa) {
      return $http({
      method: 'POST',
      url: '/api/comments',
      headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
      data: $.param(commentData)
      });
    },
    // destroy a comment
    destroy : function(id) {
      return $http.delete('/api/comments/' + id);
    }*/
  }
});
