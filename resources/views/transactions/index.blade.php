@extends('layouts.app')

@section('content')
@section('title', 'Listar Transações')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Lista de Transações</h2>
        <div class="mb-4">
        <a href="{{ route('transactions.create') }}" class="btn-submit inline-block">
            Criar Transação
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($transactions as $transaction)
    <div class="bg-white shadow rounded p-4 flex justify-between items-center hover:shadow-md transition cursor-pointer"
        onclick="window.location='{{ route('transactions.show', $transaction) }}'">
        <!-- Coluna 1: Valor e Status -->
        <div>
            <p class="text-lg font-semibold">R$ {{ number_format($transaction->valor, 2, ',', '.') }}</p>
            <p class="text-gray-500">{{ $transaction->status }}</p>
        </div>

        <!-- Coluna 2: Criada em -->
        <div>
            <p class="text-gray-500 text-sm">{{ $transaction->created_at->format('d/m/Y H:i') }}</p>
        </div>

        <!-- Dropdown de opções -->
        <div class="relative ml-4" onclick="event.stopPropagation()">
            <button onclick="toggleDropdown('dropdown-{{ $transaction->id }}')" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                &#8942;
            </button>

            <div id="dropdown-{{ $transaction->id }}" class="hidden absolute right-0 mt-2 w-32 bg-white border rounded shadow z-10">
                <a href="{{ route('transactions.show', $transaction) }}" class="block px-4 py-2 hover:bg-gray-100">Ver</a>
                <a href="{{ route('transactions.edit', $transaction) }}" class="block px-4 py-2 hover:bg-gray-100">Editar</a>
                <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir a transação?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Excluir</button>
                </form>
            </div>
        </div>

    </div>
@endforeach
    </div>
</div>

<script>
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('hidden');
}

// Fecha dropdown ao clicar fora
window.addEventListener('click', function(e){
    const dropdowns = document.querySelectorAll('[id^="dropdown-"]');
    dropdowns.forEach(dd => {
        if (!dd.contains(e.target) && !dd.previousElementSibling.contains(e.target)) {
            dd.classList.add('hidden');
        }
    });
});
</script>
@endsection
