<div class="fomrSection inicial fade">
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Habilitações</div>
    <div class="w-full flex-1 mx-2 svelte-1l8159u">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
            <select name="estadoCivil" required class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
                <option value="< a 4 ano">Inferior a 4º ano</option>
                <option value="4 ano">1º Ciclo (4º ano)</option>
                <option value="2º ciclo">2º Ciclo (6º ano)</option>
                <option value="3º ciclo">3º Ciclo (9º ano)</option>
                <option selected="selected" value="12º">Ensino Secundario (12º ano ou equivalente)</option>
                <option value="cet">CET</option>
                <option value="licenciatura">Licenciatura</option>
                <option value="barchalerato">Barcharelato</option>
                <option value="mestrado">Mestrado</option>
                <option value="doutoramento">Doutoramento</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Area do curso</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="Gestão / Marketing / Finanças"
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Ano de Conclusão</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <select name="anoConclusao" class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    <?php for ($year = (int)date('Y'); 1950 <= $year; $year--): ?>
                        <option value="<?=$year;?>"><?=$year;?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full flex-1 mx-2 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Certificado de Habilitações</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u"
                data-mdb-toggle-button="false">
                <input type="file" name="certificado" accept=".pdf, .jpg, .jpeg, .png" required
                    class="form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="data nascimento" data-mdb-toggle="datepicker">
            </div>
        </div>

    </div>
</div>