<div class="inicial fade" data-layout="formSection">
    <h1 class="mb-8 text-xl text-center negative-margin-top">Criar Conta</h1>
    <p>*Com a password introduzida abaixo e o email fornecido previamente será criada uma conta, com a
        qual poderá consultar o estado da sua inscrição e onde serão guardados os seus
        dados, de forma a poder candidatar-se a outras formações sem a necessidade
        de reintroduzir os dados novamente.</p>
    <div class="h-6 mx-2 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase">
        Palavra passe</div>
    <div class="flex-1 w-full mx-2 ">
        <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
            <input placeholder="password" type="password" name="passe" pattern="^[a-zA-Z0-9.\-_@!]{8,25}$"
                data-formulario="password"
                class="w-full p-1 px-2 text-gray-800 outline-none appearance-none border-none rounded">
        </div>
        <p class="hidden text-sm text-red-600" data-invalid="password">*Insira uma palavra passe com ente 8 e 25
            caracteres, sendo que os os unicos caracteres especiais permitidos sao: .-_@!</p>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 w-full mx-2 ">
            <div class="h-6 mt-3 text-xs font-bold leading-8 text-gray-600 uppercase"> Confirmar passe</div>
            <div class="flex p-1 my-2 bg-white border border-gray-200 rounded ">
                <input type="password" placeholder="insira a sua passe novamente" name="passe_confirm"
                    data-formulario="confirm_password" onblur="confirmPassword(this)"
                    class="w-full p-1 px-2 text-gray-800 outline-none appearance-none border-none rounded">
            </div>
            <p class="hidden text-sm text-red-600" data-invalid="confirm_password">*As palavras passe nao sao iguais</p>
        </div>
    </div>
</div>
