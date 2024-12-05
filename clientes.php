<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
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
        <h1>Cadastro de Clientes</h1>

        <form action="#" method="POST" class="form-cadastro">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="item_comprado">Item Mais Comprado</label>
            <input type="text" id="item_comprado" name="item_comprado" required>

            <button type="submit">Cadastrar Cliente</button>
        </form>

        <h2>Lista de Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Item Mais Comprado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João da Silva</td>
                    <td>joao@example.com</td>
                    <td>(11) 99999-9999</td>
                    <td>Rua X, 123</td>
                    <td>Notebook</td>
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
