<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Vendas</title>
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
        <h1>Relatório de Vendas</h1>

        <form action="#" method="GET" class="form-relatorio">
            <label for="cliente">Cliente</label>
            <select id="cliente" name="cliente">
                <option value="">Selecione um Cliente</option>
                <option value="cliente1">João da Silva</option>
                <option value="cliente2">Maria Oliveira</option>
            </select>

            <label for="data_inicio">Data de Início</label>
            <input type="date" id="data_inicio" name="data_inicio">

            <label for="data_fim">Data de Fim</label>
            <input type="date" id="data_fim" name="data_fim">

            <button type="submit">Gerar Relatório</button>
        </form>

        <h2>Relatório de Vendas</h2>
        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Item Comprado</th>
                    <th>Data da Compra</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João da Silva</td>
                    <td>Notebook</td>
                    <td>2024-10-01</td>
                    <td>R$ 2.000,00</td>
                </tr>
                
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 CRM - Sistema de Gestão de Clientes</p>
