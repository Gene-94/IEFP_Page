@extends('dashboard.layouts.base')
@section('content')


<header class="bg-white shadow">
      <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$page}}</h1>
      </div>
</header>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
    <div class="p-4 rounded-lg border-4 border-dashed border-gray-200">

        @yield('main')


    </div>
    </div>
</div>
</main>

@endsection