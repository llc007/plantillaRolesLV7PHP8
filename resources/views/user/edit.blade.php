@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar usuario</div>

                    <div class="card-body">
                        @include('custom.message')

                        <form action="{{route('user.update', $user->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="container">
                                <h4>Datos</h4>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="name" name="name"
                                           value="{{old('name', $user->name)}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email"
                                           value="{{old('email', $user->email)}}">
                                </div>
                                {{$user->roles[0]->name}}
                                <div class="form-group">
                                    <select name="roles" id="roles" class="form-control">
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}"
                                            @isset($user->roles[0]->name)
                                                @if($role->name == $user->roles[0]->name)
                                                    selected
                                                    @endif
                                            @endisset
                                        >{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <hr>

                                <input class="btn btn-primary" type="submit" value="Guardar">


                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
