<div data-layout="SitProf" data-layout-sitProff="Desempregado" class="hidden">
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Tempo em desemprego </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="menos1Ano" value="3" selected>
                    <label for="menos1Ano">Inferior a 1 ano</label>
                </div>
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="mais1Ano" value="4">
                    <label for="mais1Ano">Superior a 1 ano</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Última proffição</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded">
                <input class="block w-full p-1 px-2 text-gray-800 outline-none appearance-none form-control"
                    placeholder=" carpinteiro ">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Data de inicio</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="inicioUltimaProfissao" type="date"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Data de fim</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="fimUltimaProfissao" type="date"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
    </div>
    @include('form.partials.detalhesEmpresa')
</div>
