@extends('layouts.app')

@section('content')
@section('title', 'Detalhes da Transação')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Detalhes da Transação</h2>

    <div class="bg-white shadow rounded p-4">
        <p><strong>ID:</strong> {{ $transaction->id }}</p>
        <p><strong>Criada em:</strong> {{ $transaction->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Usuário:</strong> {{ $transaction->user->name }}</p>
        <p><strong>Valor:</strong> R$ {{ number_format($transaction->valor, 2, ',', '.') }}</p>
        <p><strong>CPF:</strong> {{ $transaction->cpf }}</p>
        <p><strong>Documento:</strong> {{ $transaction->documento ?? '-' }}</p>
        <p><strong>Status:</strong> {{ $transaction->status }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('transactions.index') }}" class="btn-submit inline-block">
            Voltar para lista
        </a>
    </div>
</div>
@endsection
