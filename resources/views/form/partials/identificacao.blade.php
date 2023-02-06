<div class="fomrSection inicial fade">
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Tipo de Documento</div>
    <div class="w-full flex-1 mx-2 ">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
            <select name="tipoDoc" class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
                <option value="1">Cartão Cidadão</option>
                <option value="2">Bilhete Identidade</option>
                <option value="3">Autorização de rezidencia</option>
                <option value="4">Passaporte</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Número do Documento</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input name="nrDoc" placeholder="XXX-XXX-XXX" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Valido até</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input name="validadeDoc" type="date" class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        

        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> NIF</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded "
                >
                <input name="nif"
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="Número de Identificação Fiscal" >
            </div>
        </div>
        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> NISS</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded "
                >
                <input name="niss"
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="Nr Segurança Social">
            </div>
        </div>

    </div>
    <div class="flex flex-col md:flex-row">
        

        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Nacionalidade</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input name="nacionalidade"
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="Nacional de" >
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Naturalidade</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded "
                >
                <input name="naturalidade"
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="Pais de Origem">
            </div>
        </div>

    </div>
</div>