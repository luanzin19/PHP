<?php

?>
<html>
<head><style>
body{
background-image:linear-gradient(45deg, cyan, yellow);
}
</style></head>
<body>
<center>
        <h1>CADASTRAR</h1>
    <form id="cadastro" action="cadastro.php" method="POST">
            Nome: <input type="text" name="nome" required> <br>
            Login: <input type="text" name="login" required> <br>
            Senha: <input type="password" name="senha" required ><br><br>
            <input type="submit" id="" value="Cadastrar">
        </form>
    </center>    
</body>
</html>
