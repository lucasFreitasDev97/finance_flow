<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->month ?? now()->month;
        $year  = $request->year  ?? now()->year;

        $incomes = Income::whereMonth('income_date', $month)
            ->whereYear('income_date', $year)
            ->orderBy('income_date', 'desc')
            ->get();

        $total = $incomes->sum('amount');

        return view('incomes.index', compact(
            'incomes',
            'total',
            'month',
            'year'
        ));
    }

    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Salvar ganho
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'income_date' => 'required|date',
            'description' => 'nullable|string|max:255',
        ]);

        Income::create([
            'amount'       => $request->amount,
            'income_date'  => $request->income_date,
            'description'  => $request->description,
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Ganho registrado com sucesso!');
    }
}
