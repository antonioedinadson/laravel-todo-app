@extends('layouts.home')
@section('subtitle', 'Home')
@section('header')
    <div class="buttons">
        <x-link href="{{ route('task.create') }}" name="Criar tarefa" />
        <x-link href="{{ route('auth.logout') }}" name="Sair" />
    </div>
@endsection
@section('content')
    <section class="tasks">
        <section class="graphic-container">
            <div class="title-graphic">
                <h1>Progresso do dia</h1>
                <div class="date">
                    <a href="{{ route('task.home', ['d' => $data['prev']]) }}"> <i class="fa-solid fa-chevron-left"></i></a>
                    <h4>{{ $data['string_date'] }}</h4>
                    <a href="{{ route('task.home', ['d' => $data['next']]) }}"> <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
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
