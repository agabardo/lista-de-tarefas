<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\ListaDeTarefas;

class TarefasController extends Controller
{

  public function me(){
      //return Auth::guard('api')->user();
      return "A";
  }

  public function index(){
      return Response()->json(listaDeTarefas::orderBy('id', 'desc')->get(), 200);
  }

  public function store(Request $request){
      $tarefa = new listaDeTarefas();
      $tarefa->texto = $request->input('texto');
      $tarefa->autor = $request->input('autor');
      $tarefa->status = $request->input('status');
      if($tarefa->save()){
        return Response("1",201);
      }
      else{
        return Response("0",304);
      }
  }

  public function update($id, Request $request){
      $tarefa = listaDeTarefas::find($id);
      $tarefa->status = $request->input('status');
      if($tarefa->save()){
        return Response()->json($tarefa, 201);
      }
      else{
        return Response("0",304);
      }
  }

  public function destroy($id){
      $tarefa = listaDeTarefas::find($id);
      if($tarefa->delete()){
        return Response("1",200);
      }
      else{
        return Response("0",304);
      }
  }
}
