<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $expenses = Expense::where('user_id', $user->id)->orderBy('due_date')->get();

        return view('expenses.index', compact('user', 'expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        return view('expenses.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $attributes = $request->only([
            'title',
            'value',
            'due_date'
        ]);

        $attributes['user_id'] = $user->id;

        Expense::create($attributes);

        return redirect('/dashboard')->with('success', 'Despesa criada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(404);
        }

        return view('expenses.edit', compact('user', 'expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(403);
        }

        $attributes = $request->only([
            'title',
            'value',
            'due_date',
        ]);

        $expense->update($attributes);

        return redirect('/dashboard')->with('success', 'Despesa editada com sucesso');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function pay(Expense $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(404);
        }

        $expense->update(['paid' => 1]);

        return redirect('/dashboard')->with('success', 'Despesa paga com sucesso');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function unpay(Expense $expense)
    {
        $user = auth()->user();

        if ($expense->user_id !== $user->id) {
            abort(404);
        }

        $expense->update(['paid' => 0]);

        return redirect('/dashboard')->with('success', 'Removido pagamento da despesa com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
