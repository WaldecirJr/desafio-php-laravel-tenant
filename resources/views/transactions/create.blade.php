@extends('layouts.app')

@section('title', 'Cadastrar Transação')

@section('content')

<nav class="bg-gray-800 text-white p-4"></nav>

<main class="bg-gray-100 flex items-center justify-center min-h-[calc(100vh-128px)]">
    <div class="main-container w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="page-title text-2xl font-bold mb-6 text-center">Cadastrar Transação</h1>
        {{-- Alertas --}}
        @if(session('error'))
            <div class="alert-transaction alert-transaction-error">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert-transaction alert-transaction-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
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

            <button type="submit" class="btn-submit w-full">Salvar</button>
        </form>
    </div>
</main>

<footer class="bg-gray-800 text-white p-4 mt-auto"></footer>
@endsection
