<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Transações</title>
</head>
<body>
    <h1>Cadastrar Transações</h1>
    <form action="" method="POST">
        @csrf
        <div>
            <label>Valor (R$):</label>
            <input type="number" step="0.01" name="valor">
        </div>

        <div>
            <label>CPF:</label>
            <input type="text" name="cpf" maxlength="11">
        </div>

        <div>
            <label>Documento (PDF/JPG/PNG):</label>
            <input type="file" name="documento">
        </div>

        <div>
            <label>Status:</label>
            <select name="status">
                <option value="Em processamento">Em processamento</option>
                <option value="Aprovada">Aprovada</option>
                <option value="Negada">Negada</option>
            </select>
        </div>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
