@extends('layout.master')
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">
            <!--Mensaje de guardado-->
                @if (session('usuarioGuardado'))
                    <div class="alert alert-success">
                        {{session('usuarioGuardado')}}
                    </div>
                @endif
            <!--Validacion de errores-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <form action="{{route('save')}}" method="post">
                @csrf
                    <div class="card-header text-center">Agregar usuario</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Email</label>
                                <input type="text" name="email" class="form-control col-md-9">
                            </div>
                            <div class="row form-group mt-5">
                                <button type="submit" class="btn btn-success col-md-6  btn-block" >
                                    Guardar
                                </button>
                               <a class="btn btn-primary col-md-6  btn-block" href="{{ url('/index') }}">Ver usuarios</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>