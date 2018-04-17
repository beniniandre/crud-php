<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="../CSS/Visual.css"  rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
        <meta charset="UTF-8">
        <title>CRUD PHP - CADASTRO</title>
        <script>
        function AbreP(a){
            location.href = a;
        }
        </script>
    </head>
    <body>
        <?php
        require ("../Conexao-e-Configuracao/Config.php");
        ?>
        <h1 class="titulo">CADASTRO: CRUD - PHP</h1>
        <section class="cadastro">
        <form action="Classes/Create.php" method="POST">
            <label id="lc">Nome Completo:</label>
            <input type="text" name="NomeCompleto" autofocus placeholder="Digite o seu Nome Completo..."/>
            <label id="lc"><br>Data de Nascimento:</label>
            <input type="date" name="DataNascimento" placeholder="Digite a sua Data de Nascimento..."/>
            <label id="lc"><br>Time do Coração:</label>
            <select name="Time">
                <option>--</option>
                <option>Atlético-MG</option>
                <option>Botafogo</option>
                <option>Corinthians</option>
                <option>Cruzeiro</option>
                <option>Flamengo</option>
                <option>Fluminense</option>
                <option>Grêmio</option>
                <option>Íbis</option>
                <option>Internacional</option>
                <option>Palmeiras</option>
                <option>Santos</option>
                <option>São Paulo</option>
                <option>Vasco</option>
                <label>Sexo:</label>
            </select>
            <!--<input type="radio" name="Sexo" value="Masculino" id="masc"/><label>Masculino</label>
            <input type="radio" name="Sexo" value="Feminino" id="fem"/><label>Feminino</label> -->
            <label id="lc"><br>Sexo:</label>
            <input type="text" name="Sexo" placeholder="Digite o seu Sexo..."/>
            <label id="lc"><br>E-mail:</label>
            <input type="email" name="Email" id="email" placeholder="Digite o seu E-mail..."/>
            <label id="lc"><br>Senha:</label>
            <input type="password" name="Senha" id="senha" placeholder="Digite a sua Senha..."/>
			<br>
            <button type="submit" id="bc" class="button">Cadastrar</button>
            <button type="button"  id="bb" class="button" onclick="AbreP('Inicio.php')">Voltar a tela de início</button>
            </section>
        </form>
    </body>
</html>
    