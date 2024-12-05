<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Gestão de Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header id="headerlogin">
        <h1 id="nomesistema">Simple Client</h1> 
    </header>

    <main>
        <section class="login-container">
            <h1>LOGIN</h1>
            <form action="login.php" method="POST" class="form-login">
                <label for="email">Papelaria Gutemberg</label>
                <input type="p" id="email" name="email" required placeholder="Usuário">

                
                <input type="password" id="senha" name="senha" required placeholder="Senha">

                <a href="inicio.php">
                    <button type="button">Entrar</button>
                </a>


        </section>
    </main>

    <footer>
        <p>&copy; 2024 CRM - HABT Sistemas</p>
    </footer>
</body>
</html>