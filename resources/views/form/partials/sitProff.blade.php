<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Situação profissional</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <select data-layout="SitProf-selector"
            class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                <option value="1" >Empregado</option>
                <option value="2" >Desempregado</option>
                <option value="3" >Estudante</option>
            </select>
        </div>
    </div>
    <div data-layout="SitProf" data-layout-id="Empregado" class="hidden">
        <div class="flex flex-col md:flex-row">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nome da Empresa</div>
            <div class="flex-1 w-full mx-2 ">
                <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                    <input type="radio" id="empregadoContaPropria" name="sitProff" value=""
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
                    <label for="empregadoContaPropria">Por conta propria</label>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nome da Empresa</div>
                <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                    <input placeholder="silva LDA Unipessoal"
                        class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nr Trabalhadores</div>
                <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                    <select name="nrTrabalhadores" data-formulario="nrTrabalhadores"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                        <option value="" disabled selected>dimensão da empresa</option>
                        @foreach($nrTrabalhadores as $op)
                            <option value="{{$op->id}}">{{$op->nome_opcao}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div data-layout="SitProf" data-layout-id="Desempregado" class="hidden">
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full mx-2 ">
                <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> ltima proffição</div>
                <div class="flex p-1 my-2 bg-white border border-gray-200 rounded datepicker "
                    data-mdb-toggle-button="false">
                    <input class="block w-full p-1 px-2 text-gray-800 outline-none appearance-none form-control"
                        placeholder=" carpinteiro ">
                </div>
            </div>
        </div>
    </div>
    <div data-layout="SitProf" data-layout-id="Estudante" class="hidden">

    </div>
</div>
