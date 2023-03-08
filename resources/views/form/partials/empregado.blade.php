<div data-layout="SitProf" data-layout-sitProff="Empregado"  {!! old('prof_layout')=="1"?"":"class='hidden'" !!}>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Regime </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="contaPropria" value="Empregado, por conta própria" {!! old('emprego')=="Empregado, por conta própria"?"checked='checked'":"" !!} data-formulario="tipoEmpregado" onblur="validateRadial()" onclick="validateRadial()">
                    <label for="contaPropria">Por conta própria</label>
                </div>
                <div class="col-span-1">
                    <input type="radio" name="emprego" id="contaOutrem" value="Empregado, por conta de outrem" {!! old('emprego')=="Empregado, por conta de outrem"?"checked='checked'":"" !!} data-formulario="tipoEmpregado" onclick="validateRadial()">
                    <label for="contaOutrem">Por conta de outrem</label>
                </div>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="tipoEmpregado">*Selecione o tipo de regime em que se enquadra</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Profissão / Atividade</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="" maxlength="250" name="ultima_proff" value="{{ old('ultima_proff') }}"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Data de inicio</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="inicio_proff" type="date" value="{{ old('inicio_proff') }}"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
        </div>
    </div>
    @include('form.partials.detalhesEmpresa')
</div>
