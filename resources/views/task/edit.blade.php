@extends('layouts.home')
@section('subtitle', 'Editar Task')
@section('header')
    <x-link href="{{ route('task.home') }}" name="Voltar" />
@endsection
@section('content')
    <div class="task-create">
        <h1>Editar tarefa</h1>
        <section class="task-create-content">
            <section class="task-create-content">
                <form action="{{ route('task.editAction') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    <div class="input-group">
                        <x-input place="Informe o titulo da tarefa" label="Titulo da tarefa" name="title" id="title"
                            type="text" value="{{ $task->title }}" />
                    </div>
                    <div class="input-group">
                        <x-input label="Data da realização" name="due_date" id="data" type="datetime-local"
                            value="{{ $task->due_date }}" />
                    </div>
                    <div class="select-group">
                        <x-select :categories=$categories place="Selecione uma categoria" label="Categoria"
                            name="category_id" category="{{ $task->category_id }}" id="category" />
                    </div>
                    <div class="text-group">
                        <x-textarea value="{{ $task->description }}" place="Descreva sua tarefa" id="desc"
                            name="description" />
                    </div>
                    <div class="button">
                        <x-button class="btn-secondary" name="Resetar" />
                        <x-button class="btn-primary" name="Atualizar" />
                    </div>
                </form>
            </section>
        </section>
    </div>
@endsection
