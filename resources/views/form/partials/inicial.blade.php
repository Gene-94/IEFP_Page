<div class="fomrSection inicial fade" data-layout="formSection">
    <p>formulario de inscrição para fromação</p>
    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3"> Nome</div>
    <div class="w-full flex-1 mx-2  ">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded  ">
            <input name="nome" placeholder="nome completo" required pattern="^[a-zA-Z]+((\s|\.)[a-zA-Z]+)+" maxlength="250" data-formulario="nome"  onblur="validateField('nome')" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1  ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Email</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded  ">
                <input name="email" placeholder="emailpessoal@email.com" required
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1  ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Telemovel</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded  ">
                <input name="tlm" placeholder="Just a hint.." class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
            </div>
        </div>

        <div class="w-full flex-1 mx-2  ">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Data Nascimento</div>
            <div class="datepicker bg-white my-2 p-1 flex border border-gray-200 rounded  "
                data-mdb-toggle-button="false">
                <input name="dataNasc" type="date"
                    class="no-border form-control block p-1 px-2 appearance-none outline-none w-full text-gray-800"
                    placeholder="data nascimento" data-mdb-toggle="datepicker">
            </div>
        </div>
    </div>
</div>
<script>
    
</script>