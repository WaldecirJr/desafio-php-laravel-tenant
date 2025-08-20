<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user')->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create(){
        return view('transactions.create');
    }

    public function store(StoreTransactionRequest $request)
    {
        $request->validate([
            'valor' => 'required|numeric|min:0',
            'cpf' => 'required|digits:11',
            'documento' => 'nullable|file|mimes:pdf,jpg,jpeg|max:2048',
            'status' => 'required|in:Em processamento,Aprovada,Negada',
        ]);

        $data = $request->validated();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('documento')) {
            $data['documento'] = $request->file('documento')->store('documentos', 'public');
        }

        Transaction::create($data);

        return redirect()->route('transactions.index')->with('success', 'Transação cadastrada com sucesso!');
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function update(StoreTransactionRequest $request, Transaction $transaction)
    {
        $request->validate([
        'valor' => 'required|numeric|min:0',
        'cpf' => 'required|digits:11',
        'documento' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'status' => 'required|in:Em processamento,Aprovada,Negada',
    ]);

    $data = $request->only('valor', 'cpf', 'status');

    if ($request->hasFile('documento')) {
        $data['documento'] = $request->file('documento')->store('documentos', 'public');
    }

    $transaction->update($data);

    return redirect()->route('transactions.index')->with('success', 'Transação atualizada com sucesso!');
}

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transação excluída com sucesso!');
    }

}
