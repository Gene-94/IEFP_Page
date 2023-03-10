<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Tipo de Documento</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <select name="tipo_documento_id" data-formulario="tipoDoc" onblur="validateField('tipoDoc')" required
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
                <option value="" {!! old('tipo_documento_id')==null?"selected":"" !!} disabled>Escolha o seu tipo de ID </option>
                @foreach ($tiposDoc as $tipo)
                    <option value="{{ $tipo->id }}" {!! $tipo->id==old('tipo_documento_id')?"selected":"" !!}>{{ $tipo->tipo }}</option>
                @endforeach
            </select>
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="tipoDoc">*Escolha um tipo de documento de identificação</p>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Número do Documento</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="nr_documento" placeholder="AA000000" data-formulario="nrDoc"
                    onblur="validateField('nrDoc')" required maxlength="25" value="{{ old('nr_documento') }}"
                    class="w-full p-1 px-2 text-gray-800 rounded appearance-none border-none">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="nrDoc">*Insira o seu número de documento tal como
                esta indicado neste</p>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Valido até</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="validade_documento" type="date" data-formulario="validadeDoc"
                    onblur="validateField('validadeDoc')" required value="{{ old('validade_documento') }}"
                    class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="validadeDoc">*Indique ate quando é valido o seu
                documento
            </p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">


        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> NIF</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded datepicker ">
                <input name="nif" data-formulario="nif" pattern="\d{9}" onblur="validateField('nif')" required
                    maxlength="9" class="w-full p-1 px-2 text-gray-800 rounded appearance-none"
                    placeholder="Número de Identificação Fiscal" value="{{ old('nif') }}">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="nif">*Insira um Número de Identificação Fiscal
                (Finanças) (9 dígitos)
            </p>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> NISS</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded datepicker ">
                <input name="niss" data-formulario="niss" pattern="\d{11}" onblur="validateField('niss')" required
                    maxlength="11" class="w-full p-1 px-2 text-gray-800 rounded appearance-none"
                    placeholder="Número Segurança Social" value="{{ old('niss') }}">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="niss">*Insira um Número de Segurança Social valido
                (11 dígitos)
            </p>
        </div>

    </div>
    <div class="flex flex-col md:flex-row">


        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nacionalidade</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <select name="nacionalidade_id" data-formulario="nacionalidade" onblur="validateField('nacionalidade')"
                    required class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none" >  
                    <option value="" {!! old('nacionalidade_id')==null?"selected":"" !!} disabled>escolha o seu país de cidadania</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais->id }}" {!! $pais->id==old('nacionalidade_id')?"selected":"" !!}>{{ $pais->nome }}</option>
                        <!--<option {{ $pais->nome == 'Portugal' ? 'selected="selected"' : '' }} value="{{ $pais->id }}">{{ $pais->nome }}</option>-->
                    @endforeach
                </select>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="nacionalidade">Escolha o país cujo é nacional de.</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Naturalidade</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded">
                <select name="naturalidade_id" data-formulario="naturalidade" onblur="validateField('naturalidade')"
                    required class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none" value="{{ old('naturalidade_id') }}">
                    <option value="" {!! old('naturalidade_id')==null?"selected":"" !!} disabled>escolha o seu país de origem</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais->id }}" {!! $pais->id==old('naturalidade_id')?"selected":"" !!}>{{ $pais->nome }}</option>
                        <!-- <option {{ $pais->nome == 'Portugal' ? 'selected="selected"' : '' }} value="{{ $pais->id }}">{{ $pais->nome }}</option> -->
                    @endforeach
                </select>
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="naturalidade">Escolha o país cujo é natural de.</p>
        </div>

    </div>
</div>
