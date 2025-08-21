@extends('layouts.app')

@section('title', 'Editar Transação')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Editar Transação</h2>

    <form action="{{ route('transactions.update', $transaction) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- método PUT obrigatório para update -->

        <div class="mb-4">
            <label for="valor" class="block mb-1">Valor:</label>
            <input type="text" name="valor" id="valor" value="{{ old('valor', $transaction->valor) }}" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label for="status" class="block mb-1">Status:</label>
            <select name="status" id="status" class="border p-2 w-full">
                <option value="Em processamento" {{ $transaction->status === 'Em processamento' ? 'selected' : '' }}>Em processamento</option>
                <option value="Aprovada" {{ $transaction->status === 'Aprovada' ? 'selected' : '' }}>Aprovada</option>
                <option value="Negada" {{ $transaction->status === 'Negada' ? 'selected' : '' }}>Negada</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="cpf" class="block mb-1">CPF:</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $transaction->cpf) }}" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label for="documento" class="block mb-1">Documento:</label>
            <input type="file" name="documento" id="documento" value="{{ old('documento', $transaction->documento) }}" class="border p-2 w-full">
        </div>

        <button type="submit" class="btn-submit">Atualizar</button>
        <a href="{{ route('transactions.index') }}" class="btn-submit ml-2">Cancelar</a>
    </form>
</div>
@endsection

