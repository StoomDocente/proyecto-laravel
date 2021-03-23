@extends('layout.master')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Usuarios de administrador</h2>
            <a class="btn btn-success mb-5" href="{{ url('/form') }}">Agregar nuevo usuario</a>
            <!--Mensaje de alerta-->
            @if (session('usuarioEliminado'))
                <div class="alert alert-success">
                    {{session('usuarioEliminado')}}
                </div>
            @endif
            <table class="table table-cordered table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{route('editform',$user->id)}}" class="btn btn-primary">
                                Editar
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('delete', $user->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit"
                                class="btn btn-danger">
                                Eliminar 
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>