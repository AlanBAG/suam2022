<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    public function delete($lista_id, $alumno_id)
    {

        $lista = Lista::find($lista_id);
        $lista->delete();
        $message = array('message' => 'Materia Eliminada');

        return redirect('/kardex-alumno/' . $alumno_id);
    }
    public function deleteListaGrupo($lista_id, $curso_id)
    {

        $lista = Lista::find($lista_id);
        $lista->delete();
        $message = array('message' => 'Materia Eliminada');

        return redirect()->route('listadoPorGrupo', ['curso_id' => $curso_id]);
    }
}
