<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;

class BudgetController extends Controller
{
    public function index()
    {
        $budgets = Budget::paginate(10);
        return view('pages.budgetcontrol.budgetcontrol', compact('budgets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department' => 'required|string',
            'budget_amount' => 'required|numeric',
            'description' => 'required|string',
            'period' => 'required|date',
        ]);

        Budget::create($request->all());
        return redirect()->route('budget.index')->with('success', 'Budget berhasil ditambahkan');
    }

    public function update(Request $request, Budget $budget)
    {
        $request->validate([
            'department' => 'required|string',
            'budget_amount' => 'required|numeric',
            'description' => 'required|string',
            'period' => 'required|date',
        ]);

        $budget->update($request->all());
        return redirect()->route('budget.index')->with('success', 'Budget berhasil diperbarui');
    }

    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect()->route('budget.index')->with('success', 'Budget berhasil dihapus');
    }
}