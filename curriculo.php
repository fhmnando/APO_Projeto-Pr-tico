<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_curriculo.css"> 
    <script src="script.js"></script>
    <title>Curriculo</title>
</head>
<body>
    <section>
        
        <header>
            <?php $nome = $_POST['nome']; echo "<h1>$nome</h1>"?>
            <?php $cargo = $_POST['cargo']; echo "<p>Cargo: $cargo</p>"?>
            <?php $email = $_POST['email']; echo "<p>E-mail: $email</p>"?>
            <?php $tel = $_POST['telefone']; echo "<p>Telefone: $tel</p>"?>
            <?php $end = $_POST['endereco']; echo "<p>Endereço: $end</p>"?>
            <?php $idade = $_POST['Data_Nascimento']; echo " <p>Idade: $idade</p>"?>
        </header>
        <main>
            <h1>Escolaridade</h1>
            <?php $grau = $_POST['grau']; echo "<p>Grau: $grau</p>"?>
            <?php $escola = $_POST['INSTITUICAO']; echo "<p>Escola ou Instituição: $escola </p>"?>
            <?php $DataEscolaINICIO = $_POST['Data_ini_Escola']; echo "<p>Inicio: $DataEscolaINICIO </p>"?>
            <?php $DataEscolaFINAL = $_POST['Data_fin_Escola']; echo "<p>Final: $DataEscolaFINAL </p>"?>


            <h1>Experiência Profissional</h1>
            <?php $titulo = $_POST['titulo']; echo "<p>Função: $titulo</p>"?>
            <?php $empresa = $_POST['empresa']; echo "<p>Empresa: $empresa </p>"?>
            <?php $DataEmpresaINICIO = $_POST['Data_ini_Empresa']; echo "<p>Inicio: $DataEmpresaINICIO </p>"?>
            <?php $DataEmpresaFINAL = $_POST['Data_fin_Empresa']; echo "<p>Final: $DataEmpresaFINAL </p>"?>
            <?php $resumo = $_POST['resumo']; echo "<p>Resumo de suas Atividades:<br>$resumo</br>"?>
             
            <a href="javascript:history.go(-1)">Editar Curriculo</a><br>
            <button onclick="window.print()" >Imprimir Curriculo</button>
        </main>
    </section>       
</body>
</html>