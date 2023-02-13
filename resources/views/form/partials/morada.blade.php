<div class="inicial fade" data-layout="formSection">
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Morada</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <textarea placeholder="morada completa" name="morada" rows="2"
                class="w-full p-1 px-2 text-gray-800 outline-none appearance-none no-border"></textarea>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Distrito</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="distrito" name="distrito"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Concelho</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="concelho" name="concelho"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Codigo Postal</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input placeholder="8500" name="postal1" id="postal1" data-target="postal1" pattern="[0-9]{4}"
                    required class="w-full p-1 px-2 text-gray-800 outline-none appearance-none"> -
                <input placeholder="000" name="postal2" id="postal2" data-target="postal2" pattern="[0-9]{3}" required
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">


        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Estado Civil</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <select name="estadoCivil" class="w-full p-1 px-2 text-gray-800 outline-none appearance-none no-border">
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                    <option value="4">Viuvo</option>
                </select>
            </div>
        </div>

    </div>
</div>

<script>
    postalFocus()
</script>
