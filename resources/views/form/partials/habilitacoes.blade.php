<div class="inicial fade" data-layout="formSection">
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Habilitações</div>
    <div class="w-full flex-1 mx-2 ">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
            <select name="habilitacoes_id" data-formulario="habilitacoes" onblur="validateField('habilitacoes')" required
                class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
                <option value="" disabled selected>nivel de escolaridade</option>
                @foreach ($habilitacoes as $hab)
                    <option value="{{ $hab->id }}">{{ $hab->nome_descritivo }}</option>
                @endforeach
            </select>
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="habilitacoes">*Indique o seu nivel de escolaridade</p>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Area do curso</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input placeholder="ex: Gestão" maxlength="250" name="area_curso"
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Ano de Conclusão</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <select name="ano_conclusao"
                    class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800 border-none">
                    <option value="" disabled selected>ano</option>
                    <?php for ($year = (int)date('Y'); 1950 <= $year; $year--): ?>
                    <option value="<?= $year ?>"><?= $year ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Certificado de Habilitações</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded "
                data-mdb-toggle-button="false">
                <input type="file" name="certificado" accept=".pdf, .jpg, .jpeg, .png" required
                    data-formulario="certificado" onblur="validateField('certificado')"
                    onchange="validateField('certificado')"
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800 rounded">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="certificado">*Adicione um documento que comprove o seu
                nivel de escolaridade, tal como um certificado de habilitações, se não possuir um em formato digital
                pode tirar uma foto do mesmo. Em ultimo caso pode enviar uma copia da matricula.</p>
        </div>

    </div>
</div>
