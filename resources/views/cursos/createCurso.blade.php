@extends('layouts.plantilla')

@section('title', 'Capturar Curso. SUAM')

@section('content')
    <br>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-6">
                <br>
                <div class="card border m-8 d-flex justify-content-center align-items-center">
                    <div class="card-header">
                        <h2>Capturar Nuevo Curso Ciclo {{ $ciclo }}</h2>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('saveCurso') }}" method="post" enctype="multipart/form-data" class="col-md-12">
                            {!! csrf_field() !!}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        Debe de llenar todos los campos
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="ciclo">Ciclo</label>
                                <input type="text" class="form-control" id="ciclo" name="ciclo"
                                    value="{{ $ciclo }}" readonly tabindex="10">
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre Curso</label>
                                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso"
                                    value="{{ old('nombreCurso') }}" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label for="name">Instructor</label>
                                <input type="text" class="form-control" id="instructor" name="instructor"
                                    value="{{ old('instructor') }}" tabindex="2">
                            </div>
                            <div class="form-group">
                                <label for="name">Aula</label>
                                <input type="text" class="form-control" id="aula" name="aula"
                                    value="{{ old('aula') }}" tabindex="3">
                            </div>
                            <div class="form-group">
                                <label for="name">Cupo</label>
                                <input type="text" class="form-control" id="cupo" name="cupo"
                                    value="{{ old('cupo') }}" tabindex="4">
                            </div>
                            <div class="form-group">
                                <label for="name">Día y Horario</label>
                                <input type="text" class="form-control" id="horario" name="horario"
                                    value="{{ old('horario') }}" tabindex="5">
                            </div>
                            <div class="form-group">
                                <label for="name">Claves de los horarios: </label>
                                <img style="border: 1px solid; color: black;"src="../images/guiaHoras.jpg">
                            </div>
                            <!---
                                                                                                        <table class="table table-hover">
                                                                                                            <thead>
                                                                                                            <tr>
                                                                                                                <th scope="col">Lunes</th>
                                                                                                                <th scope="col">Martes</th>
                                                                                                                <th scope="col">Miércoles</th>
                                                                                                                <th scope="col">Jueves</th>
                                                                                                                <th scope="col">Viernes</th>
                                                                                                            </tr>
                                                                                                            </thead>
                                                                                                            <tbody>

                                                                                                            <tr>
                                                                                                                <th scope="row">9 - 10</th>
                                                                                                                <td><div class="form-group">
                                                                                                                        <input class="form-check-input" type="checkbox" value="" id="chk" name="chk">
                                                                                                                    </div></td>
                                                                                                                <td>
                                                                                                                    <div class="form-group">
                                                                                                                        <input class="form-check-input" type="checkbox" value="" id="chk" name="chk">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="form-group">
                                                                                                                        <input class="form-check-input" type="checkbox" value="" id="chk" name="chk">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="form-group">
                                                                                                                        <input class="form-check-input" type="checkbox" value="" id="chk" name="chk">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>




                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                        -->
                            <div class="form-group">
                                <label for="name">Clave Hora 1</label>
                                <input type="text" class="form-control" id="hora1" name="hora1"
                                    value="{{ old('hora1') }}" tabindex="6">
                            </div>
                            <div class="form-group">
                                <label for="name">Clave Hora 2</label>
                                <input type="text" class="form-control" id="hora2" name="hora2"
                                    value="{{ old('hora2') }}" tabindex="7">
                            </div>
                            <div class="form-group">
                                <label for="name">Clave Hora 3</label>
                                <input type="text" class="form-control" id="hora3" name="hora3" value="0"
                                    tabindex="8">
                            </div>
                            <button type="submit" class="btn btn-success">Guardar datos</button>
                            <a href="{{ route('listadoCursos', ['ciclo' => $ciclo]) }}" class="btn btn-danger">
                                Cancelar </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
