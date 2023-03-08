<div class="flex flex-col md:flex-row">
    <div class="flex-1 w-full mx-2 ">
        <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nome da Empresa</div>
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <input placeholder="silva LDA Unipessoal" maxlength="250" name="nomeEmpresa" onblur="validateOnEmployed('nomeEmpresa')"
            data-formulario="nomeEmpresa" class="w-full p-1 px-2 text-gray-800 outline-none appearance-none" value="{{ old('nomeEmpresa') }}">
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="nomeEmpresa">*Insira o nome da empresa onde trabalha</p>
    </div>
</div>
<div class="flex flex-col md:flex-row">
    <div class="flex-1 w-full mx-2 ">
        <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Morada da Empresa</div>
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <textarea placeholder="morada completa" name="moradaEmpresa" rows="2" data-formulario="moradaEmpresa"
                onblur="validateOnEmployed('moradaEmpresa')" maxlength="250" 
                class="w-full p-1 px-2 text-gray-800 rounded border-none appearance-none">{{ old('moradaEmpresa') }}</textarea>
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="moradaEmpresa">*Insira a morada do seu local de trabalho</p>
    </div>
</div>
<div class="flex flex-col md:flex-row">

</div>
<div class="flex flex-col sm:flex-row">
    <div class="flex-1 w-full mx-2">
        <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nr Trabalhadores</div>
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <select name="nrTrabalhadores" data-formulario="nrTrabalhadores"
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                <option value="" disabled {!! old('nrTrabalhadores')==null?"selected":"" !!}>dimensão</option>
                @foreach ($nrTrabalhadores as $op)
                    <option value="{{ $op->id }}" {!! $op->id == old('nrTrabalhadores')?"selected":"" !!}>{{ $op->nome_opcao }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex-1 w-full mx-2">
        <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> NIF da Empresa</div>
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <input name="nifEmpresa" placeholder="" maxlength="9" pattern="\d{9}"  onblur="validateOnEmployed('nifEmpresa')"
            data-formulario="nifEmpresa" class="w-full p-1 px-2 text-gray-800 outline-none appearance-none" value="{{ old('nifEmpresa') }}">
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="nifEmpresa">*Insira o NIF da empresa onde trabalha</p>
    </div>
    <div class="flex-1 w-full mx-2">
        <div class="md:hidden h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Código Postal Empresa</div>
        <div class="hidden md:block h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">Cod.Postal Empresa
        </div>
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <input placeholder="8500" name="postal1_Empresa" id="postal1_Empresa" pattern="[0-9]{4}" maxlength="4" value="{{ old('postal1_Empresa') }}"
                oninput="if(this.value.length==4){document.getElementById('postal2_Empresa').focus()}" onblur="validateOnEmployed('postal1_Empresa')"
                data-formulario="postal1_Empresa" class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none mr-1 pl-5">
            <strong>-</strong>
            <input placeholder="000" name="postal2_Empresa" id="postal2_Empresa" pattern="[0-9]{3}" maxlength="3"  value="{{ old('postal2_Empresa') }}"
            onblur="validateOnEmployed('postal2_Empresa')" data-formulario="postal2_Empresa"
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none ml-1 pl-3">
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="postal2_Empresa"></p>
        <p class="hidden text-sm text-red-600" data-invalid="postal1_Empresa">*Indique o seu codigo postal da empresa</p>
    </div>
</div>
