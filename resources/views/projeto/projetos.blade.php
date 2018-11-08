@extends('layouts.layout')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Projeto</th>
                <th>Descriçao</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $p)

            <tr>
                <th>
                    <a href="/project/{{$p['id']}}">
                        {{$p['title']}}
                    </a>
                </th>
                <th> {{$p['description']}} </th>
                <th> <a href="/project/{{$p['id']}}/edit"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Editar
        </button></a></th>
            </tr>

            @endforeach
        </tbody>

    </table>
</div>

@endsection
