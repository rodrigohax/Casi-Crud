<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tarea;

class TareaController extends Controller
{
    public function index()
    {
      $tareas = Tarea::all();
      return view('tarea.index',compact('tareas'));
    }

    public function crear()
    {
        return view('tarea.crear');
    }
    public function almacenar(Request $request)
    {
        $tarea = new Tarea($request->all());
        $tarea->save();
        return redirect('tarea');
    }

    public function editar($id)
    {
      $tarea = Tarea::find($id);
      return view('tarea.editar')->with('tarea', $tarea);
    }

    public function actualizar(Request $request, $id)
    {
      $tarea= Tarea::find($id);
      $tarea->fill($request->all());
      $tarea->save();
      return redirect('tarea');
    }

}
