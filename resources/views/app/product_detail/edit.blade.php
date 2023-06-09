@extends('app.layouts.basic')
@section('titulo', 'Detalhes do produto')
@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar detalhes do produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            
            </ul>
        </div>

        <div class="informacao-pagina">
            <h4>Produto</h4>
            <div>Nome: {{ $produto_detalhe->item->nome }}</div>
            <br>
            <div>Descrição: {{ $produto_detalhe->item->descricao }}</div>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.product_detail._components.form_create_edit', ['produto_detalhe' => $produto_detalhe->id, 'unidades' => $unidades])
                   
               @endcomponent
            </div>       
        </div>
    </div>

@endsection