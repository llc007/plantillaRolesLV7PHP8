@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver rol</div>

                    <div class="card-body">
                        @include('custom.message')

                        <form action="{{route('user.update', $user->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="container">
                                <h4>Datos</h4>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="name" name="name"
                                           value="{{old('name', $user->name)}}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email"
                                           value="{{old('email', $user->email)}}" disabled>
                                </div>
                                {{$user->roles[0]->name}}
                                <div class="form-group">
                                    <select disabled name="roles" id="roles" class="form-control">
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

                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('user.index')}}" class="btn btn-danger">Atras</a>


                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
