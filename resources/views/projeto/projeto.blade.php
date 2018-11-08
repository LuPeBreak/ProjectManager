@extends('layouts.layout')

@section('content')

<div class="container form-container card">
    <div>
        <h1>{{$project['title']}}</h1>
        <p>{{$project['description']}}</p>
        <a href="/project/{{$project['id']}}/edit">Editar</a>
    </div>
    <br>
    <br>
    <div>
        @if ($project->tasks()->count())
        <h3>Tarefas</h3>
        <ul>
            @foreach ($project->tasks as $task)
            <form action="/task/{{$task['id']}}" method="POST">
                @csrf
                @method('PUT')
                <label class="completed {{$task->completed?"is-completed":""}}"for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()"
                        {{$task['completed']?"checked line-through":""}}>
                    {{$task['title']}}
                </label>
                
            </form>
            @endforeach

        </ul>
        @endif
    </div>

    
        <form action="/task/{{$project['id']}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" placeholder="Nome da tarefa">
                    </div>
                    <div class="col-md-2">
                        <button type='submit' class="btn btn-primary" role="button">criar</button>
                    </div>
                </div>
            </div>

        </form>
    
</div>


@endsection
