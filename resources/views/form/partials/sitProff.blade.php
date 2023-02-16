<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Situação profissional</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <select data-layout="SitProf-selector" onchange="sitProff_layoutListener()"
            class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                <option value="" selected disabled >a sua situação profissional</option>
                <option value="1" >Empregado</option>
                <option value="2" >Desempregado</option>
                <!--<option value="3" >Estudante</option>-->
            </select>
        </div>
    </div>
    @include('form.partials.empregado')
    @include('form.partials.desempregado')
    {{--@include('form.partials.estudante')--}}
</div>