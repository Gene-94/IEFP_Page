@php($page = "Area de Trabalho")


@extends('dashboard.layouts.dashboard_base')
@section('content')
    
@include('dashboard.partials.calendar')
@include('dashboard.partials.personList' /*, ['tabela' => $opcoes[0][$i], 'nome' => $opcoes[1][$i]]*/)


@endsection