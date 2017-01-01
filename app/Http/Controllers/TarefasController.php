<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\ListaDeTarefas;
class TarefasController extends Controller
{
  public function index(){
      return Response()->json(listaDeTarefas::orderBy('id', 'desc')->get(), 200);
  }

  public function store(Request $request){
      $tarefa = new listaDeTarefas();
      $tarefa->texto = $request->input('texto');
      $tarefa->autor = $request->input('autor');
      $tarefa->status = $request->input('status');
      if($tarefa->save()){
        return "1";
      }
      else{
        return "0";
      }
  }

  public function update($id, Request $request){
      $tarefa = listaDeTarefas::find($id);
      $tarefa->status = $request->input('status');
      if($tarefa->save()){
        //return "1";
        return Response()->json($tarefa, 201);
      }
      else{
        return "0";
      }
  }

  public function destroy($id){
      $tarefa = listaDeTarefas::find($id);
      if($tarefa->delete()){
        return "1";
      }
      else{
        return "0";
      }
  }
}
