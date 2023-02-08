@php
$page = "Editar de opçoes de formulario";


$opcoes = array (
    $tabelas,
    $nome_tabelas
);

function btnc($color){

    return "bg-transparent hover:bg-$color-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded";
}

@endphp


@extends('dashboard.layouts.frame')
@section('main')

@for($i=0; $i<count($opcoes[0]) && $i<count($opcoes[1]); $i++)
    <div class="my-4">
        <form method="POST">
            @csrf
            <input type="hidden" name="table_array_pos" value="{{$i}}">
            @include('dashboard.partials.dropdown_item', ['tabela' => $opcoes[0][$i], 'nome' => $opcoes[1][$i]])
            <button type="submit" class="{{btnc('green')}}" >Adicionar</button>
            <button type="submit" formaction="/admin/opcoes/editar"  class="{{btnc('orange')}}" >Editar</button>
            <button type="submit" formaction="/admin/opcoes/apagar"  class="{{btnc('red')}}" onclick='return confirm("Tem a certeza que deseja apagar a opçao selecionada ?")' >Eliminar</button>
        </form>
    </div>
    <hr>
@endfor


@endsection