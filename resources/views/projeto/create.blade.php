@extends('layouts.layout')

@section('content')

<div class="container form-container ">
    <form action="/project" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control {{$errors->has('title')?'alert-danger':''}} " name="title" placeholder="Nome do projeto" required>
        </div>

        <div class="form-group">
            <label for="">descriçao</label>
            <textarea class="form-control {{$errors->has('description')?'alert-danger':''}}" name="description" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary center">Criar</button>
    </form>
    <div class="rounded badge-danger">
            @if($errors->count())
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif     
    </div>
</div>

@endsection
