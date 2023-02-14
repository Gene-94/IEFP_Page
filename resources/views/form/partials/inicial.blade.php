<div class="inicial fade" data-layout="formSection">
    <p>formulario de inscrição para fromação</p>
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Nome</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <input name="nome" placeholder="nome completo" required pattern="^[a-zA-Z]+((\s|\.)[a-zA-Z]+)+"
                maxlength="250" data-formulario="nome" onblur="validateField('nome')"
                class="w-full p-1 px-2 text-gray-800 rounded appearance-none">
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="nome">*Insira o nome completo separado por espaços e com um
            maximo
            de 250 caracteres</p>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Email</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="email" placeholder="emailpessoal@email.com" required pattern="^[\w\.]+@\w+\.[a-zA-Z]+"
                    maxlength="250" data-formulario="email" onblur="validateField('email')"
                    class="w-full p-1 px-2 text-gray-800 rounded appearance-none">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="email">*Insira um email valido</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Telemovel</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input name="tlm" placeholder="Número de Telemóvel" data-formulario="tel"
                    onblur="validateField('tel')" required
                    pattern="^((\+|0{2})\d{1,3}[-\s]?)?(\d{9,11}|(\d{3}\s\d{3}\s\d{3}))$"
                    maxlength="16"
                    class="w-full p-1 px-2 text-gray-800 rounded appearance-none">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="tel">*Insira um numero de telefone valido</p>
        </div>

        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Data Nascimento</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded">
                <input name="dataNasc" type="date" data-formulario="dataNasc" onblur="validateField('dataNasc')"
                    required class="w-full p-1 px-2 text-gray-800 appearance-none rounded border-none">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="dataNasc">*Insira uma data de nascimento</p>
        </div>
    </div>
</div>
<script>
    initialShow();
</script>
