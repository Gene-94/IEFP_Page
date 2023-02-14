<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Morada</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <textarea placeholder="morada completa" name="morada" rows="2"
            data-formulario="morada" onblur="validateField('morada')"
            required maxlength="250" class="w-full p-1 px-2 text-gray-800 rounded appearance-none"></textarea>
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="morada">*Insira uma morada valida com um limitte de 250 caracteres</p>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Distrito</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <select name="distrito" data-formulario="distrito" onblur="validateField('distrito')" required onchange="mostrarConcelhos()"
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                    <option value="" selected>-- O seu distrito --</option>
                    @foreach ($distritos as $distrito)
                        <option value="{{ $distrito->id }}" data-formulario-option="distrito">{{ $distrito->nome }}</option>
                    @endforeach
                </select>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="distrito">*Escolha o seu distrito de residencia</p>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Concelho</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <select name="concelho" data-formulario="concelho" onblur="validateField('concelho')" required
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                    <option value="" selected>-- O seu oncelho --</option>
                    @foreach ($concelhos as $concelho)
                        <option class="hidden" value="{{ $concelho->id }}" data-formulario-option="concelho" data-target-distrito="{{$concelho->distrito_id}}">{{ $concelho->nome }}</option>
                    @endforeach
                </select>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="concelho">*Escolha o seu concelho de residencia</p>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Codigo Postal</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="8500" name="postal1" id="postal1" data-target="postal1" pattern="[0-9]{4}" maxlength="4"
                    required class="w-full p-1 px-2 text-gray-800 outline-none appearance-none"> -
                <input placeholder="000" name="postal2" id="postal2" data-target="postal2" pattern="[0-9]{3}" required maxlength="3"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">


        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Estado Civil</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <select name="estadoCivil" data-formulario="estadoCivil"
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded">
                    <option value="">-- Escolha o seu estado civil --</option>
                    @foreach ($estadosCivis as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->tipo }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
</div>

<script>
    postalFocus();
    mostrarConcelhos();
</script>
