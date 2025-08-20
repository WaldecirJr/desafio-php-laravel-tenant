@extends('layouts.register-transaction')

@section('content')
    <div class="content">
        <div class="main-container">

            <h1 class="page-title">Cadastrar Transações</h1>
            <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data"class="form-container">
            @csrf
        
                <div class="mb-4">
                    <label for="valor" class="form-label">Valor (R$):</label>
                    <input type="number" step="0.01" name="valor" class="form-input">
                </div>

                <div class="mb-4">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" name="cpf" maxlength="11" class="form-input">
                </div>

                <div class="mb-4">
                    <label for="documento" class="form-label">Documento (PDF/JPG/PNG):</label>
                    <input type="file" name="documento" class="form-input">
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" class="form-input">
                        <option value="Em processamento">Em processamento</option>
                        <option value="Aprovada">Aprovada</option>
                        <option value="Negada">Negada</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Salvar</button>
            </form>
        </div>
    </div>
@endsection
