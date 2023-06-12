@extends('layouts.home')
@section('subtitle', 'Home')
@section('header')
    <div class="buttons">
        <x-link href="{{ route('task.create') }}" name="Criar tarefa" />
        <x-link href="{{ route('auth.logout') }}" name="Sair" />
    </div>
@endsection
@section('content')
    <section class="graphic-container">
        <div class="title-graphic">
            <h1>Progresso do dia</h1>
            <hr />
            <div class="date">
                <a href="{{ route('task.home', ['d' => $data['prev']]) }}"> <i class="fa-solid fa-chevron-left"></i></a>
                <h4>{{ $data['string_date'] }}</h4>
                <a href="{{ route('task.home', ['d' => $data['next']]) }}"> <i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="tasks-count">
            <p>Tarefas <span>3/6</span></p>
        </div>
        <div class="grafic">
            <div class="graphic-base">
                <span>55%</span>
                <span>Completo</span>
            </div>
        </div>
        <div class="remaining-tasks">
            <span><i class="icon fa-solid fa-exclamation"></i></span>
            <p>Restam 3 tarefas para serem realizadas</p>
        </div>
    </section>
    <section class="tasks">
        <select name="type-task" id="type-task">
            <option value="all">Todas as tarefas</option>
            <option value="pending">Tarefas pendentes</option>
            <option value="complete">Todas realizadas</option>
        </select>
        <div class="task-list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
@endsection

<script>
    const select = document.querySelector("#task-type");
</script>
