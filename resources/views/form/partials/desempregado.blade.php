<div data-layout="SitProf" data-layout-sitProff="Desempregado" class="hidden">
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Tempo em desemprego </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="menos1Ano" value="Desempregado, ha menos de um ano" selected>
                    <label for="menos1Ano">Inferior a 1 ano</label>
                </div>
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="mais1Ano" value="Desempregado, ha mais de um ano">
                    <label for="mais1Ano">Superior a 1 ano</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Subsídios</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <select name="subsidio_id" data-formulario="subsidio" onblur="validateField('subsidio')"
                    class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800 border-none">
                    <option value="" disabled selected>subsídios / apoios</option>
                    @foreach ($subsidios as $subsidio)
                        <option value="{{ $subsidio->id }}">{{ $subsidio->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="subsidio">*Indique se recebe algum tipo de apoio do
                estado.</p>
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
                <input name="inicio_proff" type="date"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Data de fim</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="fim_proff" type="date"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
    </div>
    @include('form.partials.detalhesEmpresa')
</div>
