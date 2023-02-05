<div class="fomrSection inicial fade">
    <p>formulario de inscrição para fromação</p>
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Nome</div>
    <div class="w-full flex-1 mx-2 svelte-1l8159u">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
            <input name="nome" placeholder="primeiro e ultimo nome" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Email</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input name="email" placeholder="oseuemail@gmail.com"
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Telemovel</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input name="tlm" placeholder="Just a hint.." class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>

        <div class="w-full flex-1 mx-2 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Data Nascimento</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u"
                data-mdb-toggle-button="false">
                <input name="dataNasc" type="date"
                    class="no-border form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="data nascimento" data-mdb-toggle="datepicker">
            </div>
        </div>

    </div>
</div>