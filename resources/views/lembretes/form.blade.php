@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="{{url('/save')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$lembrete->id}}">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" @if(count($errors)) value="{{old('nome')}}" @else value="{{$lembrete->nome}}" @endif required>
                </div>
                <div class="col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" @if(count($errors)) value="{{old('email')}}" @else value="{{$lembrete->email}}" @endif required>
                </div>
                <div class="col-md-12">
                    <label for="nome">Data/Hora</label>
                    <input type="text" name="data" id="data" class="form-control datetimepicker" @if(count($errors)) value="{{old('data')}}" @else value="{{\App\Helpers\FormatHelper::dateTimeBr($lembrete->data)}}" @endif placeholder="__/__/____ --:--" required>
                </div>
                <div class="col-md-12">
                    <label for="repeticao">Repetição</label>
                    <select name="repeticao" id="repeticao" class="form-control" required>
                        <option value="">Selecione</option>
                        <option value="1" @if(!is_null($lembrete->id) && $lembrete->repeticao == 1 ) selected @endif>Não se repete</option>
                        <option value="2" @if(!is_null($lembrete->id) && $lembrete->repeticao == 2 ) selected @endif>Diariamente</option>
                        <option value="3" @if(!is_null($lembrete->id) && $lembrete->repeticao == 3 ) selected @endif>A cada uma hora</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Salvar</button>
                </div>
            </div>
        </form>
    </div>

@endsection
