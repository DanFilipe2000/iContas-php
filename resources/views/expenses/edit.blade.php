@extends('layouts.app')

@section('content')
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light align-items-center justify-content-between pt-3">
                <a class="navbar-brand" href="/dashboard"> <img src="{{ asset('img/landing/logo.png') }}" width="34"
                        alt="logo"> iConta$
                </a>

                <div style="display: flex; gap: 10px;">
                    <a class="btn_2 d-lg-block" href="/expenses/create">Criar despesa</a>
                    <a class="btn_2 bg-red" href="/logout" style="padding: 16px;"><i class="ti-power-off"></i></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header part end-->

    <!-- content part start-->
    <section class="content_part">
        <div class="expense_container">
            @if ($expense->paid)
                <a href="/expenses/unpay/{{ $expense->id }}" class="btn_2 bg-yellow mb-4" style="border: none; width: 100%;">Não Paga</a>
            @else
                <a href="/expenses/pay/{{ $expense->id }}" class="btn_2 bg-blue mb-4" style="border: none; width: 100%;">Paga</a>
            @endif
            <form action="/expenses/{{ $expense->id }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title">Título</label>
                    <input type="title" class="form-control" name="title" value="{{ $expense->title }}">
                </div>
                <div class="mb-3">
                    <label for="value">Valor</label>
                    <input type="number" class="form-control" name="value" value="{{ $expense->value }}" step=".01">
                </div>
                <div class="mb-4">
                    <label for="due_date">Vencimento</label>
                    <input type="date" class="form-control" name="due_date" value="{{ $expense->due_date->format('Y-m-d') }}">
                </div>
                <button type="submit" class="btn_2 mb-3" style="border: none; width: 100%;">Enviar</button>
            </form>
                <form action="/expenses/{{ $expense->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn_2 bg-red btn-danger mb-3" style="border: none; width: 100%;">Deletar</button>
                </form>
        </div>
    </section>
@endsection
