@extends('layouts.home')
@section('subtitle', '')
@section('content')
    <section class="graphic-container">
        <div class="title-graphic">
            <h1>Progresso do dia</h1>
            <hr />
            <div class="date">
                <span> <i class="fa-solid fa-chevron-left"></i></span>
                <h4>13 de DEZ</h4>
                <span> <i class="fa-solid fa-chevron-right"></i></span>
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
        <select name="" id="">
            <option value="">Todas as tarefas</option>
        </select>
        <div class="task-list">
            @php
                $data = [
                    [
                        'id' => 1,
                        'done' => true,
                        'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'desc' => 'lorem tesgdeu fefee',
                        'category' => 'Category01',
                    ],
                    [
                        'id' => 2,
                        'done' => false,
                        'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'desc' => 'lorem tesgdeu fefee',
                        'category' => 'Category02',
                    ],
                    [
                        'id' => 3,
                        'done' => true,
                        'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'desc' => 'lorem tesgdeu fefee',
                        'category' => 'Category03',
                    ],
                ];
            @endphp
            <x-task :data=$data[0] />
            <x-task :data=$data[1] />
            <x-task :data=$data[2] />
        </div>
    </section>
@endsection
