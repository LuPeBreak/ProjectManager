@extends('layouts.layout')

@section('content')

<div class="container form-container card">
    <div>
        <h1>{{$project['title']}}</h1>
        <p>{{$project['description']}}</p>


        <div class="row">
                <a href="/project/{{$project['id']}}/edit"><button type="button" class="margin10 btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-edit"></span> Editar
                      </button></a>
                <form action="/project/{{$project['id']}}" method="POST">
                    @method("delete")
                    @csrf
                    <button type="submit" class="margin10 btn btn-danger btn-sm marginl5">
                            <span class="glyphicon glyphicon-trash"></span> 
                    </button>
                </form>
        </div>
        
    </div>
    <br>
    <br>
    <div>
        @if ($project->tasks()->count())
        <h3>Tarefas</h3>
        <ul>
            @foreach ($project->tasks as $task)
            <div class="row margin10">
                    <form action="/task/{{$task['id']}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label class="completed {{$task->completed?"is-completed":""}}"for="completed">
                                <input type="checkbox" name="completed" onchange="this.form.submit()"
                                {{$task['completed']?"checked line-through":""}}>
                            {{$task['title']}}
                        </label>
                        
                    </form>
                    <form action="/task/{{$task['id']}}" method="POST">
                        @method("delete")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm marginl5">
                                <span class="glyphicon glyphicon-trash"></span> 
                        </button>
                    </form>
            </div>
            
            @endforeach

        </ul>
        @endif
    </div>

    
        <form action="/task/{{$project['id']}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control {{$errors->has('title')?'alert-danger':''}}" name="title" placeholder="Nome da tarefa">
                    </div>
                    <div class="col-md-2">
                        <button type='submit' class="btn btn-primary" role="button">criar</button>
                    </div>
                </div>
                @include('partial.error');
            </div>

        </form>
    
</div>


@endsection
