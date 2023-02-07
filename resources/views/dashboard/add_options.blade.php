@php
$page = "Editar de opçoes de formulario";


$opcoes = array (
    $tabelas,
    array(
        'TIpos de documentos',
        'Situaçoes Profissionais', 
        'Requisitos de formaçoes',
        'Regimes de horario',
        'Regimes de presença',
        'Numero de trabalhadores de empresa',
        'Hanilitaçoes academicas')
);

function btnc($color){

    return "bg-transparent hover:bg-$color-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded";
}


@endphp


@extends('dashboard.layouts.frame')
@section('main')

@for($i=0; $i<count($opcoes[0]) && $i<count($opcoes[1]); $i++)
    <div class="my-4">
        <form action="" method="POST">
            @csrf
            @include('dashboard.partials.dropdown_item', ['tabela' => $opcoes[0][$i], 'nome' => $opcoes[1][$i]])
            <button type="submit" class="{{btnc('green')}}" >Adicionar</button>
            <button type="submit"  class="{{btnc('orange')}}" >Editar</button>
            <button type="submit" formaction="/{{$}}"  class="{{btnc('red')}}" onclick='return confirm("Tem a certeza que deseja apagar a opçao selecionada ?")' >Eliminar</button>
        </form>
    </div>
    <hr>
@endfor


@endsection