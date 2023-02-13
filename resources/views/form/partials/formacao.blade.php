<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Formação</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <select name="formacao" class="w-full p-1 px-2 text-gray-800 outline-none appearance-none no-border">
                <option value="id formação">Formações na base de dados</option> 
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Requisitos</div>
            <p>Abaixo estão indicados os requisitos para a formação.</p>
            <p>Selecione os requ que estão em falta e pertende solicitar ao IEFP</p>
            <div class="flex p-1 my-2 bg-white ">
                <!-- foreach loop  -->
                <label for="requisito-requisito_id" class="text-gray-800">Laptop</label>
                <input type="checkbox" id="requisito-requisito_id" name="requisitos" class="" value="{requisito_id}">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        

    </div>
</div>