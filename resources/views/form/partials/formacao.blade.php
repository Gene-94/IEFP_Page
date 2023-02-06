<div class="fomrSection inicial fade">
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Formação</div>
    <div class="w-full flex-1 mx-2 svelte-1l8159u">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
            <select name="formacao" class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
                <option value="id formação">Formações na base de dados</option> 
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Requisitos</div>
            <p>Abaixo estão indicados os requisitos para a formação.</p>
            <p>Selecione os requ que estão em falta e pertende solicitar ao IEFP</p>
            <div class="bg-white my-2 p-1 flex svelte-1l8159u">
                <!-- foreach loop  -->
                <label for="requisito-requisito_id" class="text-gray-800">Laptop</label>
                <input type="checkbox" id="requisito-requisito_id" name="requisitos" class=" " value="{requisito_id}">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        

    </div>
</div>