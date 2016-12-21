<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\ListaDeTarefas;
class TarefasController extends Controller
{
  public function index()
  {
      return Response()->json(listaDeTarefas::get());
  }
}
