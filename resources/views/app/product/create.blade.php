@extends('app.layouts.basic')
@section('titulo', 'Produtos')
@section('content')

    <div class="conteudo-pagina">
        
        <div class="titulo-pagina-2">
            <p>Adicionar produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="{{route('')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="POST" action="{{route('produto.store')}}">
                    @csrf
                    <input type ="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type ="text" name="descricao" placeholder="Descrição" class="borda-preta">
                    <input type ="text" name="peso" placeholder="Peso" class="borda-preta">
                    <select name="unidade_id">
                        <option>Selecione a Unidade de Medida</option>
                        @foreach($unidades as $unidade)
                            <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="borda-preta">Adicionar</button>
                </form>
            </div>       
        </div>
    </div>

@endsection