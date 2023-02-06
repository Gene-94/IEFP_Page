<div class="fomrSection inicial fade">
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Morada</div>
    <div class="w-full flex-1 mx-2 ">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
            <textarea placeholder="morada completa" name="morada" rows="2"
                class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800"></textarea>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Distrito</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input placeholder="distrito" name="distrito"
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Concelho</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input placeholder="concelho" name="concelho" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
        <div class="w-full mx-2 flex-1 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Codigo Postal</div>
            <div class=" bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <input placeholder="8500" name="postal1" id="postal1" data-target="postal1" pattern="[0-9]{4}" required class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> - 
                <input placeholder="000" name="postal2" id="postal2" data-target="postal2" pattern="[0-9]{3}" required class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        

        <div class="w-full flex-1 mx-2 ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Estado Civil</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded ">
                <select name="estadoCivil" class="no-border p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                    <option value="4">Viuvo</option>
                </select>
            </div>
        </div>

    </div>
</div>

<script>postalFocus()</script>