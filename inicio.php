<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM - Sistema de Gestão de Clientes</title>
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
        <section class="welcome">
            <h1 id="welcome">Papelaria Gutemberg</h1>
            <p id="welcome">Av. São Judas Tadeu, 848 · (38) 3214-1275</p>
        </section>
    </main>

    <div id="icones_red">
        <img src="https://cdn-icons-png.flaticon.com/512/3366/3366202.png" id="iconcliente">

        <img src="https://cdn-icons-png.flaticon.com/512/4024/4024382.png" id="iconrelatorio">

        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" id="icon_usuario">

    </div>

    <div> 
        <a href="clientes.php">
            <button id="clientered" type="button">Meus Clientes</button>
        </a>

        <a href="relatorios.php">
            <button id="relatoriored" type="button">Relatórios</button>
        </a>

        <a href="usuarios.php">
            <button id="usuariored" type="button">Usuários</button>
        </a>
    </div>
    

    <footer>
        <p>&copy; 2024 CRM - HABT Sistemas</p>
    </footer>
</body>
</html>
