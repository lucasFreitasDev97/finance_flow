<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->month ?? now()->month;
        $year  = $request->year  ?? now()->year;

        $expenses = Expense::with('category')
            ->whereMonth('expense_date', $month)
            ->whereYear('expense_date', $year)
            ->orderBy('expense_date', 'desc')
            ->get();

        $total = $expenses->sum('amount');

        $byCategory = $expenses
            ->groupBy('category.name')
            ->map(fn ($items) => $items->sum('amount'));

        return view('expenses.index', compact(
            'expenses',
            'total',
            'byCategory',
            'month',
            'year'
        ));
    }


    public function create(): View
    {
        $categories = Category::all();
        return view('expenses.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'amount' => 'required|numeric|min:0.01',
            'expense_date' => 'required|date',
        ]);

        Expense::create($request->all());

        return redirect()->route('expenses.index')
            ->with('success', 'Gasto registrado!');
    }
}
