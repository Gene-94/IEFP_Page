<div data-layout="SitProf" data-layout-sitProff="Empregado" class="hidden">
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Regime </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="contaPropria" value="1" required>
                    <label for="contaPropria">Por conta propria</label>
                </div>
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="contaOutrem" value="2" required selected>
                    <label for="contaOutrem">Por conta de outrem</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Profissão / Atividade</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="" maxlength="250" name="profisso"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Data de inicio</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="inicioProfissao" type="date"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
    </div>
    @include('form.partials.detalhesEmpresa')
</div>
