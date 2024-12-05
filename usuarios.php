<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a>Simple Client</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Cadastro de Usuários</h1>

        <form action="#" method="POST" class="form-cadastro">
            <label for="nome_usuario">Nome Completo</label>
            <input type="text" id="nome_usuario" name="nome_usuario" required>

            <label for="email_usuario">Email</label>
            <input type="email" id="email_usuario" name="email_usuario" required>

            <label for="senha_usuario">Senha</label>
            <input type="password" id="senha_usuario" name="senha_usuario" required>

            <label for="nivel_usuario">Nível de Acesso</label>
            <select id="nivel_usuario" name="nivel_usuario" required>
                <option value="admin">Administrador</option>
                <option value="operador">Operador</option>
            </select>

            <button type="submit">Cadastrar Usuário</button>
        </form>

        <h2>Lista de Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nível de Acesso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alice Santos</td>
                    <td>alice@example.com</td>
                    <td>Administrador</td>
                    <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
                </tr>
               
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 CRM - Sistema de Gestão de Clientes</p>
    </footer>
</body>
</html>
