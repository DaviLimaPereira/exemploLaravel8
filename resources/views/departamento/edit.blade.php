@extends('master')
@section('titulo','Editar Departamento')
@section('corpo')
    <div class="container">
        <h3>Editar Departamento</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/departamento/{{$dep->id}}" method="post">
                    @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" 
                        value="{{(empty(old('nome')))?$dep->nome:old('nome')}}"/>
                        @if($errors->has('nome'))
                        <p class="text-danger">{{$errors->first('nome')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="sigla">Sigla</label>
                        <input type="text" name="sigla" id="sigla" class="form-control" 
                        value="{{(empty(old('sigla')))?$dep->sigla:old('sigla')}}"/>
                        @if($errors->has('sigla'))
                        <p class="text-danger">{{$errors->first('sigla')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
                    <a href="/departamento" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection