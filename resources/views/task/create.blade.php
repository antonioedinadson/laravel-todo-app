@extends('layouts.home')
@section('subtitle', 'Criar Tarefa')
@section('header')
    <x-link href="{{ route('task.home') }}" name="Voltar" />
@endsection
@section('content')
    <div class="task-create">
        <h1>Criar tarefa</h1>
        <section class="task-create-content">
            <form action="{{ route('task.createAction') }}" method="POST">
                @csrf
                <div class="input-group">
                    <x-input place="Informe o titulo da tarefa" label="Titulo da tarefa" name="title" id="title"
                        type="text" />
                </div>
                <div class="input-group">
                    <x-input label="Data da realização" name="due_date" id="data" type="datetime-local" />
                </div>
                <div class="select-group">
                    <x-select :categories=$categories place="Selecione uma categoria" label="Categoria" name="category_id"
                        id="category" category="" />
                </div>
                <div class="text-group">
                    <x-textarea place="Descreva sua tarefa" id="desc" name="description"></x-textarea>
                </div>
                <div class="button">
                    <x-button class="btn-secondary" name="Resetar" />
                    <x-button class="btn-primary" name="Criar" />
                </div>
            </form>
        </section>
    </div>
@endsection
