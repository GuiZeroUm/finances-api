<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return Transaction::all();
    }

    public function show(Transaction $transactionId){
        return $transactionId;
    }

    public function store(Request $request)
    {
        $transaction = Transaction::create($request->all());

        return response()->json($transaction,201);
    }

    public function test_complex(Request $request)
    {
        return Transaction::with('category')->get();
    }
}
