@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Novo Lembrete</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 table-responsive">
                @if(count($lembretes))
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="text-center">Data</th>
                        <th>Repetição</th>
                        <th class="text-center"><i class="fas fa-cogs"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lembretes as $lembrete)
                        <tr>
                            <td>{{$lembrete->nome}}</td>
                            <td>{{$lembrete->email}}</td>
                            <td class="text-center">{{\App\Helpers\FormatHelper::dateTimeBr($lembrete->data)}}</td>
                            <td>
                                @if($lembrete->repeticao == 1)
                                    Não se repete
                                @elseif($lembrete->repeticao == 1)
                                    Diariamente
                                @else
                                    A cada uma hora
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{url('/edit/'.$lembrete->id)}}" class="btn btn-xs btn-info"><i class="fas fa-pencil"></i></a>
                                <a href="{{url('/delete/'.$lembrete->id)}}" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <h5>Exibindo página {!! $lembretes->currentPage() !!} até {!! $lembretes->lastPage() !!} de {!! $lembretes->total() !!} registro(s)</h5>
                <div class="text-center">
                    {!! $lembretes->render() !!}
                </div>
                @else
                <br>
                <span>Nenhum lembrete encontrado</span>
                @endif
            </div>
        </div>
    </div>
@endsection
