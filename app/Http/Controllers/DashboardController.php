<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $month = $request->month ?? now()->month;
        $year  = $request->year  ?? now()->year;

        $expenses = Expense::with('category')
            ->whereMonth('expense_date', $month)
            ->whereYear('expense_date', $year)
            ->get();

        $incomes = Income::whereMonth('income_date', $month)
            ->whereYear('income_date', $year)
            ->get();

        $totalExpenses = $expenses->sum('amount');
        $totalIncomes  = $incomes->sum('amount');

        $balance = $totalIncomes - $totalExpenses;

        $expensesByCategory = $expenses
            ->groupBy('category.name')
            ->map(fn ($items) => $items->sum('amount'));

        return view('dashboard', compact(
            'month',
            'year',
            'totalExpenses',
            'totalIncomes',
            'balance',
            'expensesByCategory'
        ));
    }
}
