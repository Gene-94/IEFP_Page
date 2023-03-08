<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Formação</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded">
            <select name="formacao" data-formulario="formacao" onblur="validateField('formacao')" required
            class="w-full p-1 px-2 text-gray-800 outline-none appearance-none border-none rounded" 
            data-dynamic="formacao" onchange="FomacaoDetails(this.value)"  >
                <option value="" {!! old('formacao')==null?"selected":"" !!} disabled>escolha a formação pretendida</option>
                @foreach($formacoes as $formacao)
                    <option value="{{$formacao->id}}">{{$formacao->nome}}</option>
                @endforeach
            </select>
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="formacao">*Escolha a formação que pertende frequentar!</p>
    </div>
    <div data-layout="formacaoInfo" class="hidden" >
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Regime Presença</div>
                <p data-target="RegimePresenca" class="mt-2"></p>
            </div>
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Regime Horario</div>
                <p data-target="RegimeHorario" class="mt-2"></p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Detalhes</div>
                <p data-target="DetalhesFormacao" class="mt-2 text-sm"></p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Requisitos</div>
                <p class="mt-2">Abaixo estão indicados os requisitos para a formação.</p>
                <p class="text-xs text-gray-500">Caso não diponha de algum dos requisitos terá de solicitar o mesmo ao IEFP</p>
                <div data-target="ListaRequisitos" class="flex flex-wrap p-1 my-2 bg-white ">
                </div>
            </div>
        </div>
    </div>
</div>

