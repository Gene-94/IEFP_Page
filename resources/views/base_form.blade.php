@extends

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>Document</title>
</head>

<body>
    <h1>IEFP</h1>
    <div class="container">

        
        <form action="/formulario" method="POST">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required placeholder="nome completo">
            </div>
            <div>
                <label for="dataNascimento">Data Nascimento</label>
                <input type="date" name="dataNasc" id="dataNasc" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="seu email pessoal">
            </div>
            <div>
                <label for="tlm">Telemovel</label>
                <input type="tel" name="tlm" id="tlm" required placeholder="ex: +351925784532">
            </div>
            <div>
                <label for="docTipo">Tipo identificação</label>
                <select name="docTipo" id="docTipo">
                    <option value="cc">Cartão de Cidadão</option>
                    <option value="bi">Bilhete de Identidade</option>
                    <option value="redidencia">Autorização de Residencia</option>
                    <option value="passaporte">Passaport</option>
                </select>
            </div>
            <div>
                <label for="docNr">Telemovel</label>
                <input type="text" name="docNr" id="docNr" required placeholder="ex: +351925784532">
            </div>
            <div>
                <label for="tlm">Telemovel</label>
                <input type="tel" name="tlm" id="tlm" required placeholder="ex: +351925784532">
            </div>
            <div>
                <label for="tlm">Telemovel</label>
                <input type="tel" name="tlm" id="tlm" required placeholder="ex: +351925784532">
            </div>
            <div>
                <label for="tlm">Telemovel</label>
                <input type="tel" name="tlm" id="tlm" required placeholder="ex: +351925784532">
            </div>
            <div>
                <label for="tlm">Telemovel</label>
                <input type="tel" name="tlm" id="tlm" required placeholder="ex: +351925784532">
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
</body>

</html>